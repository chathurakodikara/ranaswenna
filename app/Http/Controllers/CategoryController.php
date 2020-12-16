<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        // $products = Product::all();
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'name'=> 'required|min:1|max:30',
            'name_si'=> 'nullable|max:30',
            'name_ta'=> 'nullable|max:30',
            'img'=> 'nullable|max:150',

         ]);

        $category = Category::create($request->all());
        return view('categories.create');

    }

    public function show(category $category)
    {
        //

    }

    public function edit(category $category)
    {
        return view('categories.edit' ,compact('category'));
    }

    public function update(Request $request, category $category)
    {
        $request->validate([

            'name'=> 'required|min:1|max:30',
            'name_si'=> 'nullable|max:30',
            'name_ta'=> 'nullable|max:30',
            'img'=> 'nullable|max:150',

         ]);

        $category->fill($request->all())->save();
        return redirect('/categories')->with('success', 'categories Updated');
    }

   
    public function destroy(category $category)
    {
        //
    }
}
