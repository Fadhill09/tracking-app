<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackingController;


Route::resource('trackings', TrackingController::class);
Route::get('Kirim', [TrackingController:: class, 'index'])->name('kirim');
Route::get('tambah', [TrackingController:: class, 'create'])->name('create');
Route::post('Kirim/', [TrackingController:: class, 'store'])->name('store');



Route::get('/', [UserController:: class, 'view1'])->name('dasboard');
Route::get('/Tentang', [UserController:: class, 'view3'])->name('tentang');







