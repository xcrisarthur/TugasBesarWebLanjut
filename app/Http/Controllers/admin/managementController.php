<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Dkbs;
use Illuminate\Support\Facades\DB;

class managementController extends Controller
{
    public function report() {
        $a = User::whereHas('dkbs')->get()->count();
        $b = User::DoesntHave('dkbs')->get()->count();
        return view('admin.report.index', compact('a', 'b'));
    }

    public function dkbs() {
        $data = User::whereHas('dkbs')->get();
        return view('admin.dkbs.index', compact('data'));
    }

    public function showDkbs($id) {
        $data = Dkbs::where('user_id', $id)->get();
        return view('admin.dkbs.show', compact('data'));
    }
}
