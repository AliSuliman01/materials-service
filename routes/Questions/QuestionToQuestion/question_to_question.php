<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Questions\QuestionToQuestion\QuestionToQuestionController;

Route::apiResource('question_to_question',QuestionToQuestionController::class);
