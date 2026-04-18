<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('pages.beranda');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/tentangkami', function () {
    return view('pages.tentangkami');
});

Route::get('/produk', function () {
    return view('pages.produk');
});