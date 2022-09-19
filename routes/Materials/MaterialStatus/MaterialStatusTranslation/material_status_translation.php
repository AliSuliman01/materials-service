<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\MaterialStatus\MaterialStatusTranslation\MaterialStatusTranslationController;

Route::apiResource('material_status_translation',MaterialStatusTranslationController::class);
