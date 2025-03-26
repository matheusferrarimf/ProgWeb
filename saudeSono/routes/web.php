<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SonoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [SonoController::class, 'index']);
Route::post('/avaliar-sono', [SonoController::class, 'avaliar']);
