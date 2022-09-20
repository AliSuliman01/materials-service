<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\Courses\Courses\CoursesController;

Route::get('search',[CoursesController::class, 'dataForSearch']);
Route::post('search',[CoursesController::class, 'search']);

Route::apiResource('courses',CoursesController::class);

