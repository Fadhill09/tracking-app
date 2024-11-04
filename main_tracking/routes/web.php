<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController:: class, 'view1'])->name('dasboard');
Route::get('/Tentang', [UserController:: class, 'view3'])->name('tentang');







