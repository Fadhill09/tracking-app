<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembelianController;

Route::resource('pembelian', PembelianController::class);
Route::get('/', [UserController:: class, 'view1'])->name('dasboard');
// Route::get('/Berita', [UserController:: class, 'view2'])->name('berita');
Route::get('/Tentang', [UserController:: class, 'view3'])->name('tentang');
Route::get('/Cek-barang', [UserController:: class, 'view4'])->name('cek');
Route::get('/Kirim-barang', [UserController:: class, 'view5'])->name('kirim');
