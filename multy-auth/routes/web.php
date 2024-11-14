<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackingController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dasboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dasboard', [HomeController::class, 'index'])->middleware(['auth','admin']);
Route::get('user/dasboard', [HomeController::class, 'user'])->middleware(['auth','user']);

Route::get('/barang', [BarangController::class, 'barang'])->name('barang');
Route::get('/cek', [BarangController::class, 'cek'])->name('cek');
Route::get('/cek/detail', [BarangController::class, 'cekdetail'])->name('cekdetail');
Route::get('/barang/detail/trac', [BarangController::class, 'tracking'])->name('tracking');
Route::get('/barang/detail/{id}', [BarangController::class, 'detail'])->name('detail');
Route::post('/barang/submit/{id}', [BarangController::class, 'submit'])->name('submit');
Route::delete('/barang/delete/{id}', [BarangController::class, 'delete'])->name('delete');
// Route::get('/barang/detail/{id}', [BarangController::class, 'detail'])->name('detail');


Route::get('Cek-data-barang', [TrackingController:: class, 'index'])->name('tampil');

Route::get('Cek-data-barang/Data-barang/{tracking}', [TrackingController::class, 'view'])->name('isidaftar');

Route::get('Tambah/Data-Barang', [TrackingController:: class, 'create'])->name('create');

Route::get('Data-Barang/{tracking}/Edit', [TrackingController:: class, 'edit'])->name('edit');

Route::post('new', [TrackingController:: class, 'store'])->name('store');

Route::post('update/{tracking}', [TrackingController::class, 'update'])->name('update');

Route::delete('delete/{tracking}', [TrackingController::class, 'destroy'])->name('hapus');

Route::get('/Beranda', [TrackingController:: class, 'dasboard'])->name('dasboard');

Route::get('/Tentang', [TrackingController:: class, 'about'])->name('tentang');





