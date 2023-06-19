<?php

namespace App\Http\Controllers;

use App\Dkbs;
use Illuminate\Http\Request;

class DkbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataDkbs = Dkbs::all();
        return view('perwalian.index', [
            'dkbss' => $dataDkbs
        ]);
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
