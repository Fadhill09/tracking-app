<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KirimController;
use App\Models\Kirim;

Route::resource('kirim', KirimController::class);
Route::get('/', [KirimController:: class, 'create'])->name('kirim.create');
Route::get('/', [UserController:: class, 'view1'])->name('dasboard');
Route::get('/Tentang', [UserController:: class, 'view3'])->name('tentang');







