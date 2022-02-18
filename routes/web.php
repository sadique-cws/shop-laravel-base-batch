<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

// category urls
Route::get('category/', [CategoryController::class,"index"])->name('category.home');
Route::post('category/', [CategoryController::class,"store"])->name('category.store');
Route::post('category/update/{id}', [CategoryController::class,"update"])->name('category.update');
Route::get('category/update/{id}', [CategoryController::class,"edit"])->name('category.edit');
Route::get('category/delete/{id}', [CategoryController::class,"delete"])->name('category.delete');

// product urls
Route::get('product/', [ProductController::class,"index"])->name('product.home');
Route::get('product/create', [ProductController::class,"insert"])->name('product.create');
Route::post('product/create', [ProductController::class,"store"])->name('product.store');
Route::post('product/update/{id}', [ProductController::class,"update"])->name('product.update');
Route::get('product/update/{id}', [ProductController::class,"edit"])->name('product.edit');
Route::get('product/delete/{id}', [ProductController::class,"destroy"])->name('product.delete');


// homecontroller work
Route::get("/",[HomeController::class,"index"])->name("homepage");
Route::get("/category-filter/{cat_id}",[HomeController::class,"categoryFilter"])->name("categoryFilter");
Route::get("/product/{pro_id}",[HomeController::class,"singleView"])->name("singleView");