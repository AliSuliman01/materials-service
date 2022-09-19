<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Levels\Levels\LevelController;

Route::apiResource('levels',LevelController::class);
