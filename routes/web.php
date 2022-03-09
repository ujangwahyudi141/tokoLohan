<?php

use App\Http\Controllers\KategoriController;
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
    return view('home');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

// route of product management
Route::get('/admin/produk',[ProductController::class,'index']);
Route::get('/create-produk',[ProductController::class,'create']);
Route::post('/tambah-produk',[ProductController::class,'store']);
Route::get('/edit-produk',[ProductController::class,'edit']);
Route::post('/update-produk/{id}',[ProductController::class,'update']);
Route::get('/hapus-produk/{id}',[ProductController::class,'destroy']);

// route of category management
Route::get('/kategori',[KategoriController::class,'index']);
Route::post('/tambah-kategori',[KategoriController::class,'store']);
Route::get('/hapus-kategori/{id}',[KategoriController::class,'destroy']);
Route::post('/edit-kategori/{id}',[KategoriController::class,'update']);

// Belanja
Route::get('/shop', function(){
    return view('shop.shop');
});
Route::get('/product',function(){
    return view('shop.product');
});
