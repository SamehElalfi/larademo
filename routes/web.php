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
    return view('index');
});


// Dashboard route
Route::prefix('dashboard')->group(function () {
    Route::get("/", "dashboard\IndexController@index")->name('dashboard.index');

    // All Products
    Route::resource('products', 'ProductController')->except(['index', 'show']);
    Route::get("products", "ProductController@manage")->name('products.manage');

    // All Categories
    Route::resource('categories', 'CategoryController')->except(['index', 'show']);
    Route::get("categories", "CategoryController@manage")->name('categories.manage');
});

Route::resource('/products', 'ProductController')->only(['index', 'show']);
Route::resource('/categories', 'CategoryController')->only(['index', 'show']);
