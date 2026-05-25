<?php

use App\Http\Controllers\MovieController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/allMovies', [MovieController::class, 'allMovie']);

Route::get('/movie/{id}', [MovieController::class, 'movie']);

Route::post('/guardar', [MovieController::class, 'guardar']);

Route::put('/actualizar/{id}', [MovieController::class, 'actualizar']);

Route::delete('/eliminar/{id}', [MovieController::class, 'eliminar']);
