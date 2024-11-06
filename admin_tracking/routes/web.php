<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang', [BarangController::class, 'barang'])->name('barang');
Route::get('/barang/detail', [BarangController::class, 'detail'])->name('detail');
Route::post('/barang/submit', [BarangController::class, 'submit'])->name('submit');
