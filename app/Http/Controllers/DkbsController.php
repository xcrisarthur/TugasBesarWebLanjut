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

class DkbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $dataMataKuliahs = MataKuliah::all();
        $dataSemester = Semester::all();
        $dataUser = User::all();
        $dataDkbs = Dkbs::all();
        $dataDetailMk = DetailMK::all();
        $dataRuangan = Ruangan::all();
        $selectedCourses = [];

        return view('dkbs.index', [
            'mks' => $dataMataKuliahs,
            'semesters' => $dataSemester,
            'users' => $dataUser,
            'dkbss' => $dataDkbs,
            'detailmks' => $dataDetailMk,
            'ruangans' => $dataRuangan,
        ])->with('selectedCourses', $selectedCourses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dkbs  $dkbs
     * @return \Illuminate\Http\Response
     */
    public function show(Dkbs $dkbs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dkbs  $dkbs
     * @return \Illuminate\Http\Response
     */
    public function edit(Dkbs $dkbs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dkbs  $dkbs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dkbs $dkbs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dkbs  $dkbs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dkbs $dkbs)
    {
        //
    }
}
