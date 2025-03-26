<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CombustivelController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [CombustivelController::class, 'index']);
Route::get('/gasto', [CombustivelController::class, 'calcular']);
