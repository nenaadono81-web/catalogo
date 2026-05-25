<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/allMovies', [MovieController::class, 'allMovie']);

Route::get('/movie/{id}', [MovieController::class, 'movie']);

Route::post('/guardar', [MovieController::class, 'guardar']);

Route::put('/actualizar/{id}', [MovieController::class, 'actualizar']);

Route::delete('/eliminar/{id}', [MovieController::class, 'eliminar']);
