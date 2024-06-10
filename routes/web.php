<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/Tentang-kami', function () {
    return view('Tentang-kami');
})->name('Tentang-kami');
Route::get('/admin', function () {
    return view('admin.beranda-admin');
})->name('admin.beranda-admin');
