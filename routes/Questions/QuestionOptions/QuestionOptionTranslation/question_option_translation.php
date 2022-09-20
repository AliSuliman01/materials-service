<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Questions\QuestionOptions\QuestionOptionTranslation\QuestionOptionTranslationController;

Route::apiResource('question_option_translation',QuestionOptionTranslationController::class);
