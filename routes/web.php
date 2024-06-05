<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
Route::get('/pesanan', function () {
    return view('pesanan');
})->name('pesanan');
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');
Route::get('/admin', function () {
    return view('admin.beranda');
})->name('admin.beranda');
Route::get('/admin/tambah-barang', function () {
    return view('admin.tambah-barang');
})->name('admin.tambah-barang');
Route::get('/admin/tambah-pesanan', function () {
    return view('admin.tambah-pesanan');
})->name('admin.tambah-pesanan');
