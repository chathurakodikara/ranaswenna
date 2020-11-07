<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//farmer Deails
Route::get('/farmer',function (){
    return view ('farmer.index');
});
//farmer Registration
Route::get('/new' , function (){
    return view('farmer.create');
});
//farmer Edit
Route::get('/edit' , function(){
    return view('Farmer.edit');
});
//my shop- Add products to market Place
Route::get('/create', function (){
    return view('myshop.create');
});
//my shop- index
Route::get('/myshop' , function(){
    return view('myshop.index');
});
//my shop- Edit
Route::get('/editshop' , function(){
    return view('myshop.edit');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


