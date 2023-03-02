<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/promotion', function () {
    return view('promotion');
});

