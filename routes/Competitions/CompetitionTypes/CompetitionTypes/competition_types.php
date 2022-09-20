<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Competitions\CompetitionTypes\CompetitionTypes\CompetitionTypeController;

Route::apiResource('competition_types',CompetitionTypeController::class);
