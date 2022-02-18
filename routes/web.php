<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\templateController;
use App\Http\Controllers\categoriesController;
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
    return view('depan.home');
});

Route::get('/allProducts', function () {
    return view('depan.product');
});

Route::get('/preview', function () {
    return view('depan.preview');
});

Route::get('/contact', function () {
    return view('depan.contact');
});

Route::get('/admin', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('depan.admin.register');
});

Route::get('/template',[templateController::class, 'index']);
Route::post('/template/create',[templateController::class, 'create']);
Route::get('template/{id}/edit',[templateController::class, 'edit']);
Route::post('template/{id}/update',[templateController::class, 'update']);
Route::get('/template/{id}/delete',[templateController::class, 'delete']);

Route::get('/categories',[categoriesController::class, 'index']);
Route::post('/categories/create',[categoriesController::class, 'create']);
Route::get('categories/{id}/edit',[categoriesController::class, 'edit']);
Route::post('categories/{id}/update',[categoriesController::class, 'update']);
Route::get('/categories/{id}/delete',[categoriesController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
