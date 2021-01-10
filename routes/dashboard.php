<?php

use Illuminate\Support\Facades\Route;

/**
 * This file contains all routes for dashboard with namespace "Dashboard",
 * prefix "/dashboard" and name(as) "dashboard."
 */

Route::get("/", "DashboardController@index")->name('index');

// All Products
Route::resource('products', 'ProductController')->except('show');

// All Categories
Route::resource('categories', 'CategoryController')->except('show');
