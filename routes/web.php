<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes - Sistem Informasi Stok Gudang
|--------------------------------------------------------------------------
*/

// Halaman utama (Dashboard)
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Resource route untuk modul Kategori
Route::resource('categories', CategoryController::class);

// Resource route untuk modul Produk / Stok Barang
Route::resource('products', ProductController::class);
