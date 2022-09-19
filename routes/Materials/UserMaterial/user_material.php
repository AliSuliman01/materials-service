<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Materials\UserMaterial\UserMaterialController;

Route::prefix('user_material')->group(function () {
    Route::post('enroll', [UserMaterialController::class, 'store']);
});

Route::apiResource('user_material', UserMaterialController::class);
