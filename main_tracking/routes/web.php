<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackingController;


Route::resource('trackings', TrackingController::class);
Route::get('Cek-data-barang', [TrackingController:: class, 'index'])->name('tampil');

Route::get('Tambah/Data-Barang', [TrackingController:: class, 'create'])->name('create');

Route::get('Data-Barang/{tracking}/Edit', [TrackingController:: class, 'edit'])->name('edit');

Route::post('new', [TrackingController:: class, 'store'])->name('store');

Route::put('update', [TrackingController::class, 'update'])->name('update');

Route::delete('delete/{tracking}', [TrackingController::class, 'destroy'])->name('hapus');


Route::get('/', [UserController:: class, 'view1'])->name('dasboard');
Route::get('/Tentang', [UserController:: class, 'view3'])->name('tentang');







