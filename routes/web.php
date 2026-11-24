<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend-only routes
|--------------------------------------------------------------------------
|
| Seluruh halaman di bawah adalah tampilan statis. Tidak ada autentikasi,
| database, API, atau aksi tulis yang terhubung ke backend.
|
*/

Route::view('/', 'pages.home')->name('home');

Route::view('/berita', 'pages.berita')->name('berita');
Route::view('/berita/detail', 'pages.detail-berita')->name('berita.detail');

Route::view('/ilmiyah', 'pages.ilmiyah')->name('ilmiyah');
Route::view('/ilmiyah/detail', 'pages.detail-ilmiyah')->name('ilmiyah.detail');

Route::view('/galeri', 'pages.galeri')->name('galeri');
Route::view('/kalender', 'pages.kalender')->name('kalender');

Route::view('/anggota', 'pages.anggota')->name('anggota');
Route::view('/perpustakaan', 'pages.perpustakaan')->name('perpustakaan');
Route::view('/struktural', 'pages.struktural')->name('struktural');
Route::view('/tentang', 'pages.tentang')->name('tentang');

Route::view('/login', 'pages.login')->name('login');
