<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang', [BarangController::class, 'barang'])->name('barang');
Route::get('/cek', [BarangController::class, 'cek'])->name('cek');
Route::get('/cek/detail', [BarangController::class, 'cekdetail'])->name('cekdetail');
Route::get('/barang/detail', [BarangController::class, 'detail'])->name('detail');
Route::post('/barang/submit', [BarangController::class, 'submit'])->name('submit');
Route::post('/barang/delete{id}', [BarangController::class, 'delete'])->name('delete');

