<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});

Route::resource('produk', ProdukController::class);

Route::get('/produk/tambah/{id}', [ProdukController::class,'store'])->where("id","[0-9]+");

Route::get('/cart', [ProdukController::class,'cart']);
