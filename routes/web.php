<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('hi');
});

Route::get('/home', function () {
    return 'Selamat Pagi Dunia, 707082400097';
});