<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Competitions\CompetitionCategory\CompetitionCategoryController;

Route::apiResource('competition_category',CompetitionCategoryController::class);
