<?php

namespace App\Http\Controllers;

use App\DetailMK;
use App\Dkbs;
use App\MataKuliah;
use App\Ruangan;
use App\Semester;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $selectedMataKuliah = session('selectedMataKuliah', []);

        $dataMataKuliahs = MataKuliah::all();
//        $mkIds = MataKuliah::pluck('mk_id');
        $dataSemester = Semester::all();
        $dataUser = User::all();
        $dataDkbs = Dkbs::all();
        $dataDetailMk = DetailMK::all();
        $dataRuangan = Ruangan::all();
        $dataDetailMks = DetailMK::with('MataKuliah', 'Ruangan')->get();
        $selectedCourses = [];

//        dd($mkIds);

        return view('perwalian.index', [
            'mks' => $dataMataKuliahs,
            'semesters' => $dataSemester,
            'users' => $dataUser,

            'dkbss' => $dataDkbs,
            'detailmks' => $dataDetailMk,
            'ruangans' => $dataRuangan,
//            'mkids' => $mkIds,
        ])->with('selectedCourses', $selectedCourses);

    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->user_id;

        foreach ($request->selected_courses as $mk_id) {
            $detailmk = DetailMK::where('mk_id', $mk_id)->first();
            $semester_id = $detailmk->semester_id;
            $id_ruangan = $detailmk->id_ruangan;
            $hari = $detailmk->hari;
            $kelas = $detailmk->kelas;
            $jam_mulai = $detailmk->jam_mulai;
            $jam_selesai = $detailmk->jam_selesai;

            DB::table('l_dkbs')->insert([
                'user_id' => $user_id,
                'mk_id' => $mk_id,
                'semester_id' => $semester_id,
                'id_ruangan' => $id_ruangan,
                'hari' => $hari,
                'kelas' => $kelas,
                'jam_mulai' => $jam_mulai,
                'jam_selesai' => $jam_selesai,
            ]);
        }

        return redirect()->back()->with('success', 'Data mata kuliah telah disimpan.');
    }


    public function show($id)
    {
//        $user = User::find($id);
//
//        // pastikan relasi dkbs dimuat terlebih dahulu
//        $user->load('dkbs');
//
//        return view('perwalian.index', ['user' => $user]);
    }
}
