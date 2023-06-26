<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class perwalianController extends Controller
{
    public function index() {
        return view('admin.perwalian.index');
    }
    public function create() {
        return view('admin.perwalian.create');
    }
}
