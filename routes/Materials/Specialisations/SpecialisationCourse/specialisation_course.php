<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\Specialisations\SpecialisationCourse\SpecialisationCourseController;

Route::apiResource('specialisation_course',SpecialisationCourseController::class);
