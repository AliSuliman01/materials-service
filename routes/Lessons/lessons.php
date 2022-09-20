<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lessons\LessonController;

Route::apiResource('lessons',LessonController::class);
