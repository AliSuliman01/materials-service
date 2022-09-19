<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\Projects\Projects\ProjectController;

Route::apiResource('projects',ProjectController::class);
