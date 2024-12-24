<?php

use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\GenreController as ApiGenreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/genres', [ApiGenreController::class, 'index']);
Route::get('/author', [AuthorController::class, 'index']);
Route::get('/book', [BookController::class, 'index']);

?>