<?php

namespace App\Http\Controllers;

use App\Models\Asc;
use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{

    public function index()
    {
        $farmers= Farmer::all();
         return view('farmer.index', compact('farmers'));
    }


    public function create()
    {
        $asc = Asc::all();
       return view('farmer.create', compact('asc'));

    }

    public function store(Request $request)
    {
         $request->validate([
            'nic'=> 'required|min:10|max:12',
            'birthday'=> 'nullable|date',
            'name'=> 'required|min:2|max:150',
            'business_name'=> 'nullable|max:50',
            'about'=> 'nullable',
            'asc_id'=> 'required',
            'gs_id'=> 'required',
            'telephone_1'=> 'required|min:15|numeric',
            'telephone_2'=> 'required|min:15|numeric',
            'email'=> 'nullable|email',
            'address'=> 'nullable',
         ]);

        $farmer = Farmer::create($request->all());

          return redirect('/farmers')->with('success', 'Farmer Insert');
    }

    public function show()
    {

    }


    public function edit(Farmer $farmer )
    {

        return view('farmer.edit' ,compact('farmer'));
    }


    public function update(Request $request, Farmer $farmer)
    {

        $request->validate([
            'nic'=> 'required|min:10|max:12',
            'birthday'=> 'nullable|date',
            'name'=> 'required|min:2|max:150',
            'business_name'=> 'nullable|max:50',
            'about'=> 'nullable',
            'asc_id'=> 'required',
            'gs_id'=> 'required',
            'telephone_1'=> 'required|min:15|numeric',
            'telephone_2'=> 'required|min:15|numeric',
            'email'=> 'nullable|email',
            'address'=> 'nullable',
         ]);

            $farmer->fill($request->all())->save();
        return redirect('/farmers')->with('success', 'Farmer Updated');
    }


    public function destroy(farmer $farmer)
    {
        $farmer ->delete();
        return redirect('/farmers');

    }
}
