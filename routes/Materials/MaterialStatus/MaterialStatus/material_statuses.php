<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\MaterialStatus\MaterialStatus\MaterialStatusController;

Route::apiResource('material_statuses',MaterialStatusController::class);
