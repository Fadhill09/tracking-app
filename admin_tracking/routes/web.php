<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TampilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang', [BarangController::class, 'barang'])->name('barang');

Route::get('/cek', [BarangController::class, 'cek'])->name('cek');
<<<<<<< HEAD

Route::get('/cek/detail', [BarangController::class, 'cekdetail'])->name('cekdetail');

Route::get('/barang/detail/{id}', [BarangController::class, 'detail'])->name('detail');

Route::post('/barang/submit', [BarangController::class, 'submit'])->name('submit');

Route::post('/barang/delete{id}', [BarangController::class, 'delete'])->name('delete');

Route::get('/barang', [TampilController::class, 'index'])->name('barang');

=======
// Route::get('/cek/detail', [BarangController::class, 'cekdetail'])->name('cekdetail');
>>>>>>> b1db97f913c9eb74a26633727aea7c70cad7f1f9
Route::get('/barang/detail/{id}', [BarangController::class, 'detail'])->name('detail');
Route::post('/barang/submit', [BarangController::class, 'submit'])->name('submit');
Route::post('/barang/delete/{id}', [BarangController::class, 'delete'])->name('delete');
Route::get('/barang', [TampilController::class, 'index'])->name('barang');
