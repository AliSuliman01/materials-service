<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\Courses\Courses\CoursesController;

Route::apiResource('courses',CoursesController::class);
