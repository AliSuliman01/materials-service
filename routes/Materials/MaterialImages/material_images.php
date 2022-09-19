<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\MaterialImages\MaterialImageController;

Route::apiResource('material_images',MaterialImageController::class);
