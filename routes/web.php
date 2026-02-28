<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/orders', [OrderController::class ,'index'])->name('orders.index');
Route::get('/products/{id}/orders', [ProductController::class, 'showOrders'])->name('products.show');
