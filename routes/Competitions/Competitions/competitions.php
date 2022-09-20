<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Competitions\Competitions\CompetitionController;

Route::apiResource('competitions',CompetitionController::class);
