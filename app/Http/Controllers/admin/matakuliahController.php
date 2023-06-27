<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MataKuliah;
use Illuminate\Support\Facades\DB;

class matakuliahController extends Controller
{
    public function index() {
        $data = MataKuliah::all();
        return view('admin.matakuliah.index', compact('data'));
    }

    public function create() {
        return view('admin.matakuliah.create');
    }

    public function show($id) {
        $data = MataKuliah::where('mk_id', $id)->first();
        return view('admin.matakuliah.show', compact('data'));
    }
}
