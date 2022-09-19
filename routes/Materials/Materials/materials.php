<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\Materials\MaterialController;


Route::prefix('materials')->group(function (){
    Route::post('search',[MaterialController::class,'search']);
    Route::get('my_materials',[MaterialController::class,'my_materials'])->middleware('auth:api');
});

Route::apiResource('materials',MaterialController::class);
