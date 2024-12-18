<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CategoryController;


// register user
Route::post('register', [AuthController::class, 'register']);

// login user
Route::post('login', [AuthController::class, 'login']);

// store messages
Route::post('/messages', [MessageController::class, 'store']);

// get product
Route::get('/product/{id}', [ProductController::class, 'getProduct']);

// get all categories
Route::get('categories', [CategoryController::class, 'index']);

// Get products for the home page
Route::get('home-products', [ProductController::class, 'getHomeProducts']);

// Get all products for the shop page
Route::get('shop-products', [ProductController::class, 'getShopProducts']);

// auth routes
Route::middleware('auth:sanctum')->group(function () {

    // get user data
    Route::get('user', [UserController::class, 'getUserData']);

    // update user
    Route::put('user', [UserController::class, 'update']);

    // get all the orders for one user
    Route::get('orders', [OrderController::class, 'userOrders']);

    // add new product
    Route::post('products', [ProductController::class, 'store']);

    // update product
    Route::put('/products/{id}', [ProductController::class, 'update']);

    // delete product
    Route::delete('/products/{id}', [ProductController::class, 'delete']);

    // get all products for one user
    Route::get('products/user', [ProductController::class, 'userProducts']);

    // get order
    Route::get('/order/{id}', [OrderController::class, 'getOrder']);

    // add new order
    Route::post('orders', [OrderController::class, 'store']);

    // remove product from favorites
    Route::delete('favorites/{productId}', [FavoriteController::class, 'destroy']);

    // add product to favorites
    Route::post('favorites', [FavoriteController::class, 'store']);

    // Get list of favorites
    Route::get('favorites/user', [FavoriteController::class, 'index']);

    // Get list of favorites
    Route::get('favorites/user', [FavoriteController::class, 'index']);

    Route::post('forgot-password', [AuthController::class, 'sendResetLinkEmail']);


});
