<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PembelianController;
use Illuminate\Support\Facades\Route;



Route::get('pembelian/create', [PembelianController::class, 'create'])->name('tambah'); // Menampilkan form
Route::post('pembelian', [PembelianController::class, 'store'])->name('store'); // Menyimpan data
Route::get('pembelian', [PembelianController::class, 'show'])->name('tampil'); // Menampilkan semua data
Route::get('pembelian/{id}/edit', [PembelianController::class, 'edit'])->name('edit'); // Menampilkan form edit
Route::put('pembelian/{id}', [PembelianController::class, 'update'])->name('update'); // Memperbarui data
Route::delete('pembelian/{id}', [PembelianController::class, 'destroy'])->name('destroy'); // Menghapus data


Route::get('/', [UserController:: class, 'view1'])->name('dasboard');
Route::get('/Tentang', [UserController:: class, 'view3'])->name('tentang');







