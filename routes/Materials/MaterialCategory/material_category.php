<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\MaterialCategory\MaterialCategoryController;

Route::apiResource('material_category',MaterialCategoryController::class);
