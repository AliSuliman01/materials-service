<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\Specialisations\Specialisations\SpecialisationController;

Route::apiResource('specialisations',SpecialisationController::class);
