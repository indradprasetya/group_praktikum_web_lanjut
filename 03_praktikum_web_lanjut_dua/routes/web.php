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

Route::prefix('promotion')->group(function () {
    Route::get('/', function () {
        return view('promotion')
        ->with('name', '');
    });
    Route::get('/book', function () {
        return view('promotion')
        ->with('name', 'Buku Ajar');
    });
    Route::get('/pen', function () {
        return view('promotion')
        ->with('name', 'Polpen Ajaib');
    });
    Route::get('/pencil', function () {
        return view('promotion')
        ->with('name', 'Pensil Pintar');
    });
});

