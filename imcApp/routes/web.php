<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [ImcController::class, 'index']);
Route::post('/imc', [ImcController::class, 'calcular']);
