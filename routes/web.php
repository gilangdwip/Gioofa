<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\templateController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\collectionController;
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
    $categories = \App\models\categories::all();
    return view('depan.home' , ['categories'=> $categories]);
});


Route::get('/preview', function () {
    return view('depan.preview');
});

Route::get('/all-product', function () {
    return view('depan.product');
});

Route::get('/contact', function () {
    return view('depan.contact');
});

Route::get('/admin', function () {
    return view('home');
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

Route::get('/order',[orderController::class, 'index']);
Route::post('/order/create',[orderController::class, 'create']);
Route::get('order/{id}/edit',[orderController::class, 'edit']);
Route::post('order/{id}/update',[orderController::class, 'update']);
Route::get('/order/{id}/delete',[orderController::class, 'delete']);

Route::get('/collection',[collectionController::class, 'index']);
Route::post('/collection/create',[collectionController::class, 'create']);
Route::get('collection/{id}/edit',[collectionController::class, 'edit']);
Route::post('collection/{id}/update',[collectionController::class, 'update']);
Route::get('/collection/{id}/delete',[collectionController::class, 'delete']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
