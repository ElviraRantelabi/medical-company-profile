<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/catalog', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/catalog/{id}', [ProductController::class, 'show'])
    ->name('product.show');


Route::get('/contact', function () {
    return view('contact');
});
