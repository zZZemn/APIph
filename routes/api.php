<?php

use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/regions", [RegionsController::class, 'index']);
Route::get("/provinces", [ProvinceController::class, 'index']);
