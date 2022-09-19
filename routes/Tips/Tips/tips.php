<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tips\Tips\TipController;

Route::apiResource('tips',TipController::class);
