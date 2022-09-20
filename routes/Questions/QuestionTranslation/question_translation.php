<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Questions\QuestionTranslation\QuestionTranslationController;

Route::apiResource('question_translation',QuestionTranslationController::class);
