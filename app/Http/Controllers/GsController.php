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
          return redirect('/gss');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // return view('gs.edit',compact('gs'));
        $ascs = Asc::all();
        $gs = Gs::find($id);
        return view('gs.edit',compact('gs','ascs'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'asc_id'=> 'required',
            'name'=> 'required|max:100',
            'name_si'=> 'nullable|max:100',
            'name_ta'=> 'nullable|max:100',
         ]);

            $gs = Gs::find($id);
            $gs->asc_id = $request->asc_id;
            $gs->name = $request->name;
            $gs->name_si = $request->name_si;
            $gs->name_ta = $request->name_ta;
            $gs->save();
            return redirect('/gss');
            
        // $gs->fill($request->all())->save();
        // return redirect('/gss');
    }


    public function destroy($id)
    {
        //
    }
}
