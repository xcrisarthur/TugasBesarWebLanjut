<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MataKuliah;
use App\ProgramStudi;
use App\DetailMK;
use Illuminate\Support\Facades\DB;

class detailmkController extends Controller
{
    public function create() {
        $programstudi = ProgramStudi::all();
        return view('admin.matakuliah.detailmk.create', compact('programstudi'));
    }

    public function store(Request $request) {
        $request->validate([
            'mk_id' => 'required',
            'mk_name' => 'required',
            'ps_id' => 'required',
            'sks' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $mk = MataKuliah::create([
                'mk_id' => $request->mk_id,
                'mk_name' => $request->mk_name,
                'ps_id' => $request->ps_id,
                'sks' => $request->sks,        
            ]);
            DB::commit();
            //pesan berhasil
            return redirect()->route('admin.matakuliah');
        } catch (\Throwable $th) {
            DB::rollBack();
            //pesan gagal
            return back();
        }   
    }

    public function edit($id, $idmk) {
        $data = MataKuliah::where('mk_id', $id)->first();
        $programstudi = ProgramStudi::all();
        return view('admin.matakuliah.edit', compact('data', 'programstudi'));
    }

    public function update(Request $request, $id, $idmk) {
        $request->validate([
            'mk_name' => 'required',
            'ps_id' => 'required',
            'sks' => 'required',
        ]);

        try {
            DB::beginTransaction();
            MataKuliah::where('mk_id', $id)->update([
                'mk_name' => $request->mk_name,
                'ps_id' => $request->ps_id,
                'sks' => $request->sks,        
            ]);
            DB::commit();
            //pesan berhasil
            return redirect()->route('admin.matakuliah');
        } catch (\Throwable $th) {
            DB::rollBack();
            //pesan gagal
            return back();
        }   
    }

    public function destroy($id, $idmk) {
        DetailMK::where('mk_id', $id)->delete();
        //pesan sudah dihapus
        return redirect()->route('admin.matakuliah.detailmk', ['id' => $id]);
    }
}
