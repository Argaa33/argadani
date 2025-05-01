<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ProductController;


Route::get('/barang', [ListBarangController::class, 'tampilkan']);
// Route::get('/barang', function () {
Route::get('/produk', [ProductController::class, 'tampilkan']);

Route::get('/', function () {
    return view('welcome');
});