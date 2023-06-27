<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class mahasiswaController extends Controller
{
    public function index() {
        return view('admin.mahasiswa.index');
    }
    public function create() {
        return view('admin.mahasiswa.create');
    }
}
