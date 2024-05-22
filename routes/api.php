<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/posts', [PostController::class, 'posts']);
    Route::get('/view/{id}', [PostController::class, 'view']);
    Route::post('/create', [PostController::class, 'create']);
    Route::put('/edit/{id}', [PostController::class, 'edit']);
    Route::delete('/delete/{id}', [PostController::class, 'delete']);
});

