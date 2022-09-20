<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PageController;

//Route::apiResource('pages',PageController::class);

Route::prefix('pages')->group(function(){
    Route::get('home_page',[PageController::class, 'home_page']);
    Route::get('',[PageController::class, 'index']);
    Route::post('',[PageController::class, 'store']);
    Route::get('{page:name}',[PageController::class, 'show']);
    Route::put('{page:name}',[PageController::class, 'update']);
    Route::delete('{page:name}',[PageController::class, 'destroy']);
});
