<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Questions\QuestionOptions\QuestionOptions\QuestionOptionController;

Route::apiResource('question_options',QuestionOptionController::class);
