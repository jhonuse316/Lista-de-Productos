<?php

use App\Http\Controllers\ProductListController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('products.index');
// });

Route::get('/', [ProductListController::class, 'index']);
Route::resource('products', ProductListController::class);
