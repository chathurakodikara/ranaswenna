<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    public function index()
    {
        $items = Item::all();
        // $categories = Category::all();
        return view('item.index',compact(['items']));
    }

    public function create()
    {

         $categories = Category::all();
         return view('item.create',compact(['categories']));
    }


    public function store(Request $request)
    {

        $request->validate([
            'category_id'=> 'required',
            'name'=> 'required|min:1|max:30',
            'name_si'=> 'nullable|max:30',
            'name_ta'=> 'nullable|max:30',
            'img'=> 'nullable|max:150',
            'keywords'=> 'nullable|max:30',

         ]);

        $item = Item::create($request->all());
        return redirect('/items');
    }


    public function show(item $item)
    {
        //
    }

    public function edit(item $item)
    {
        $categories = Category::all();
        return view('item.edit',compact('item','categories'));
    }


    public function update(Request $request, item $item)
    {
        $request->validate([
            'category_id'=> 'required',
            'name'=> 'required|min:1|max:30',
            'name_si'=> 'nullable|max:30',
            'name_ta'=> 'nullable|max:30',
            'img'=> 'nullable|max:150',
            'keywords'=> 'nullable|max:30',

         ]);

         $item->fill($request->all())->save();
         return redirect('/items')->with('success', 'item Updated');
    }


    public function destroy(item $item)
    {
        //
    }
}
