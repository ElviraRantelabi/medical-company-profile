<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/catalog-detail', function () {
    return view('catalog-detail');
});
