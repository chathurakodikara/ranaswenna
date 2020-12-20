<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Farmer;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{

    public function index()
    {
        $products= Product::all();
        return view('myshop.index', compact('products'));
    }


    public function create()
    {
        // $categories = Category::all();
        // $items = Item::all();
        // $farmerDetails = Farmer::where('name','=',Auth::user()->name)->first();
         return view('myshop.create');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'farmer_nic' => 'required|exists:farmers,nic',
            'product_category'=> 'required',
            'items_id'=> 'required|exists:items,id',
            'description'=> 'nullable|max:150',
            'unit'=> 'required|max:10|in:Kg,Units,tons',
            'qty'=> 'required|max:99999.99|numeric',
            'unit_price'=> 'nullable|max:999999.99|numeric',
            'organic'=> 'nullable|boolean',
            'transport'=> 'nullable|boolean',
         ]);
            // dd($request->toArray());
        $farmer = Farmer::where('nic', $request->farmer_nic)->first();

        $product = new Product;

        $product->farmer_id =  $farmer->id;


        $product->items_id = $request->items_id;
        $product->description = $request->description;
        $product->unit = $request->unit;
        $product->qty = $request->qty;
        $product->unit_price = $request->unit_price;
        $product->transport = $request->transport;
        $product->organic = $request->organic;
        $product->asc_id =  $farmer->asc_id;
        $product->gs_id =  $farmer->gs_id;
        $product->user_id = auth()->user()->id;

        $product->save();
        return redirect()->back();
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
