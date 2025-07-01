<?php

use App\Http\Controllers\ProductListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductListController::class);
