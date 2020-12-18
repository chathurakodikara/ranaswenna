<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
 
    public function index()
    {
        $products= Product::all();
        return view('myshop.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        $items = Item::all();
         return view('myshop.create',compact(['categories' , 'items']));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(product $product)
    {
        //
    }


    public function edit(product $product)
    {
        //
    }


    public function update(Request $request, product $product)
    {
        //
    }


    public function destroy(product $product)
    {
        //
    }
}
