<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categories\Categories\CategoryController;

Route::apiResource('categories',CategoryController::class);
