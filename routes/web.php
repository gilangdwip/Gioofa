<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/allProducts', function () {
    return view('works');
});

Route::get('/preview', function () {
    return view('preview');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', function () {
    return view('admin.register');
});
