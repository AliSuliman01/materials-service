<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Competitions\CompetitionMember\CompetitionMemberController;

Route::apiResource('competition_member',CompetitionMemberController::class);
