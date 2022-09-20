<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Competitions\CompetitionTypes\CompetitionTypeTranslation\CompetitionTypeTranslationController;

Route::apiResource('competition_type_translation',CompetitionTypeTranslationController::class);
