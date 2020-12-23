<?php

namespace App\Http\Controllers;

use App\Models\Asc;
use Illuminate\Http\Request;

class AscController extends Controller
{
    public function index()
    {
        $ascs = Asc::all();
        return view('asc.index',compact(['ascs']));
    }


    public function create()
    {
        return view('asc.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'district'=> 'required|max:50',
            'name'=> 'required|max:100',
            'name_si'=> 'nullable|max:100',
            'name_ta'=> 'nullable|max:100',

         ]);

        $asc = Asc::create($request->all());

          return redirect('/ascs')->with('success', 'Asc Insert');
    }

    public function show(asc $asc)
    {
        //
    }

    public function edit(asc $asc)
    {   
        return view('asc.edit', compact('asc'));
    }

    public function update(Request $request, asc $asc)
    {
        $request->validate([
            'district'=> 'required|max:50',
            'name'=> 'required|max:100',
            'name_si'=> 'nullable|max:100',
            'name_ta'=> 'nullable|max:100',

         ]);

        $asc->fill($request->all())->save();
        return redirect('/ascs')->with('success', 'Asc Updated');
    }

    public function destroy(asc $asc)
    {
        //
    }
}
