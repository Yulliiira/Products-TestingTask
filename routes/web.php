<?php

use App\Http\Controllers\Application\OrderController;
use App\Http\Controllers\Application\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::post('/orders/{order}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
