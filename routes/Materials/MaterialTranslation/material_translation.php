<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\MaterialTranslation\MaterialTranslationController;

Route::apiResource('material_translation',MaterialTranslationController::class);
