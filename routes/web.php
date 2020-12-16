<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\CategoryController;
use App\HTTP\Controllers\ProductsController;



Route::get('/', function () {
    return view('welcome');
});
//farmer Deails

Route::resource('/farmers', FarmerController::class );

Route::resource('/myshop' , ProductsController::class);

//categories- create
Route::resource('/categories' , CategoryController::class );

Route::resource('/items' , ItemsController::class );

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/userlist',  function ()
{
       return view('admin.users.index');
}); 

// 