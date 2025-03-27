<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/imc', [App\Http\Controllers\ImcController::class, 'index']);
Route::post('/imc', [App\Http\Controllers\ImcController::class, 'calcular']);

Route::get('/sono', [App\Http\Controllers\SonoController::class, 'index']);
Route::post('/sono', [App\Http\Controllers\SonoController::class, 'avaliar']);

Route::get('/combustivel', [App\Http\Controllers\CombustivelController::class, 'index']);
Route::get('/gasto', [App\Http\Controllers\CombustivelController::class, 'calcular']);
