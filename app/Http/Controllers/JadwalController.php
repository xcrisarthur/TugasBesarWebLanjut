<?php

namespace App\Http\Controllers;

use App\DetailMK;
use App\Dkbs;
use App\MataKuliah;
use App\ProgramStudi;
use App\Role;
use App\Ruangan;
use App\Semester;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JadwalController extends Controller
{

    public function index()
    {
        $dataMataKuliahs = MataKuliah::all();
        $dataSemester = Semester::all();
        $dataUser = User::all();
        $dataDkbs = Dkbs::all();
        $dataDetailMk = DetailMK::all();
        $dataRuangan = Ruangan::all();
        $selectedCourses = [];

        return view('jadwal.index', [
            'mks' => $dataMataKuliahs,
            'semesters' => $dataSemester,
            'users' => $dataUser,
            'dkbss' => $dataDkbs,
            'detailmks' => $dataDetailMk,
            'ruangans' => $dataRuangan,
        ])->with('selectedCourses', $selectedCourses);
    }

}
