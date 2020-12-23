<?php

namespace App\Http\Controllers;

use App\Models\Gs;
use App\Models\Asc;
use Illuminate\Http\Request;

class GsController extends Controller
{

    public function index()
    {
        $gss = Gs::all();
        return view('gs.index',compact('gss'));
    }


    public function create()
    {
        $ascs = Asc::all();
        return view('gs.create',compact(['ascs']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'asc_id'=> 'required',
            'name'=> 'required|max:100',
            'name_si'=> 'nullable|max:100',
            'name_ta'=> 'nullable|max:100',

         ]);

        $gs = Gs::create($request->all());

          return redirect('/gss')->with('success', 'Gs Insert');
    }


    public function show(Gs $gs)
    {
        //
    }


    public function edit(Gs $gs)
    {
        return view('gs.edit',compact('gs'));

    }


    public function update(Request $request, Gs $gs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gs  $gs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gs $gs)
    {
        //
    }
}
