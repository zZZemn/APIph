<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);
