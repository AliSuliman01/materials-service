<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\MaterialImages\MaterialImageCategory\MaterialImageCategoryController;

Route::apiResource('material_image_category',MaterialImageCategoryController::class);
