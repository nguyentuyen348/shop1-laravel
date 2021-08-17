<?php

use App\Http\Controllers\ProductController;
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

Route::prefix('admin')->group(function (){

Route::prefix('products')->group(function (){
    Route::get('/index',[ProductController::class,'index'])->name('products.index');
    Route::get('/create',[ProductController::class,'create'])->name('products.create');
    Route::post('/create',[ProductController::class,'store']);

    Route::get('/detail/{id}',[ProductController::class,'detail'])->name('products.detail');

    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::post('/edit/{id}',[ProductController::class,'update']);

    Route::get('/destroy/{id}',[ProductController::class,'destroy'])->name('products.destroy');


});
});
