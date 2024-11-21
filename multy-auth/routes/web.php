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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dasboard', [HomeController::class, 'index'])->middleware(['auth','admin']);
Route::get('user/dasboard', [HomeController::class, 'user'])->middleware(['auth','user']);
Route::get('drifer/dasboard', [HomeController::class, 'drifer'])->middleware(['auth','drifer']);

Route::get('/barang', [TrackingController::class, 'barang'])->name('barang');
Route::get('/cek', [TrackingController::class, 'cek'])->name('cek');
Route::get('/cek/detail', [TrackingController::class, 'cekdetail'])->name('cekdetail');
Route::get('/barang/detail/trac/{id}', [TrackingController::class, 'tracking'])->name('tracking');
Route::get('/barang/detail/{id}', [TrackingController::class, 'detail'])->name('detail');
Route::post('/barang/submit/{barangid}', [TrackingController::class, 'submit'])->name('submit');
Route::delete('/barang/delete/{id}', [TrackingController::class, 'delete'])->name('delete');
Route::delete('/barang/hapus/{id}', [TrackingController::class, 'destroy'])->name('destroy');
// Route::get('/barang/detail/{id}', [BarangController::class, 'detail'])->name('detail');


Route::get('Cek-data-barang', [BarangController:: class, 'index'])->name('tampil');

Route::get('Cek-data-barang/Data-barang/{barang}', [BarangController::class, 'view'])->name('isidaftar');

Route::get('Tambah/Data-Barang', [BarangController:: class, 'create'])->name('create');

Route::get('Data-Barang/{barang}/Edit', [BarangController:: class, 'edit'])->name('edit');

Route::post('new', [BarangController:: class, 'store'])->name('store');

Route::put('update/{barang}', [BarangController::class, 'update'])->name('update');

Route::delete('delete/{barang}', [BarangController::class, 'destroy'])->name('hapus');

Route::get('/Beranda', [BarangController:: class, 'dasboard'])->name('dasboard');

Route::get('/Tentang', [BarangController:: class, 'about'])->name('tentang');





