<?php

namespace App\Http\Controllers;

use App\Models\farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= farmer::all();
         return view('farmer.index',['farmers'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('farmer.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
         
        $farmer= Farmer::create($request->all());

        
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer $farmer )
    {
        // return farmer::find($id);
        // 
    
        return view('farmer.edit' ,compact('farmer')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

        $data = farmer::find($id);
        $data->nic=$request->input('nic');
        $data->name=$request->input('name');
        $data->birthday=$request->input('birthday');
        $data->business_name=$request->input('business_name');
        $data->about=$request->input('about');
        $data->asc_id=$request->input('asc_id');
        $data->gs_id=$request->input('gs_id');
        $data->telephone_1=$request->input('telephone_1');
        $data->telephone_2=$request->input('telephone_2');
        $data->email=$request->input('email');
        $data->address=$request->input('address');
        $data->save();
        return redirect('/farmers')->with('success', 'Farmer Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(farmer $farmer)
    {
        //
    }
}
