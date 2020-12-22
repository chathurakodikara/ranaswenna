<?php

namespace App\Http\Controllers;

use App\Models\gs;
use Illuminate\Http\Request;

class GsController extends Controller
{

    public function index()
    {
        $gss = Gs::all();
        return view('asc.index',compact('gss'));
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
     * @param  \App\Models\gs  $gs
     * @return \Illuminate\Http\Response
     */
    public function show(gs $gs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gs  $gs
     * @return \Illuminate\Http\Response
     */
    public function edit(gs $gs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gs  $gs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gs $gs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gs  $gs
     * @return \Illuminate\Http\Response
     */
    public function destroy(gs $gs)
    {
        //
    }
}
