<?php

use App\Http\Controllers\Application\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);