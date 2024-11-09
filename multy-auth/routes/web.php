<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dasboard', [HomeController::class, 'index'])->middleware(['auth','admin']);

Route::get('/barang', [BarangController::class, 'barang'])->name('barang');
Route::get('/cek', [BarangController::class, 'cek'])->name('cek');
Route::get('/cek/detail', [BarangController::class, 'cekdetail'])->name('cekdetail');
Route::get('/barang/detail', [BarangController::class, 'detail'])->name('detail');
Route::post('/barang/submit', [BarangController::class, 'submit'])->name('submit');
Route::post('/barang/delete{id}', [BarangController::class, 'delete'])->name('delete');
Route::get('/barang/detail/{id}', [BarangController::class, 'detail'])->name('detail');
