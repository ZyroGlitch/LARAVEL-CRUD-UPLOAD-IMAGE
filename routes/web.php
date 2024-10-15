<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadProductController;

// VIEW ROUTES
Route::get('/', action: [UserController::class,'login'])
->name('view.login');

Route::get('/register', [UserController::class,'register'])
->name('view.register');

Route::get('/logout', [UserController::class,'logout'])
->name('view.logout');

// Route::middleware('is_customer')->group(function () {
    Route::get('/product', [ProductController::class,'product'])
->name('view.product');

Route::get('/history', [ProductController::class,'history'])
->name('view.history');

Route::get('/customer', [ProductController::class,'customer'])
->name('view.customer');

Route::get('/addProduct', [UploadProductController::class,'addProduct'])
->name('view.addProduct');

Route::get('/editForm/{productID}', [ProductController::class,'editForm'])
->name('view.edit');


// DATABASE ROUTES - USERS
Route::post('/store', [UserController::class,'store'])
->name('db.store');

Route::post('/checkAuth', [UserController::class,'checkAuth'])
->name('db.checkAuth');

// DATABASE ROUTES - PRODUCTS
Route::post('/product/store', [ProductController::class,'store'])
->name('db.product_store');

Route::put('/edit', [ProductController::class,'edit'])
->name('db.product_edit');

Route::delete('/product/destroy/{productID}', [ProductController::class,'destroy'])
->name('db.product_destroy');
// });

// DATABASE ROUTES - PRODUCTS
Route::post('/addProduct/store', [UploadProductController::class,'store'])
->name('db.addProduct_store');