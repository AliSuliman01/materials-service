<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Questions\Questions\QuestionController;

Route::apiResource('questions',QuestionController::class);
