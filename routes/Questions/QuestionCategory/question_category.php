<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Questions\QuestionCategory\QuestionCategoryController;

Route::apiResource('question_category',QuestionCategoryController::class);
