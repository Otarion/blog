<?php

use App\Controllers\HelloController;
use App\Controllers\PostController;
use MVC\Route;
use App\Controllers\RegisterController;

return [
    Route::get('/', [HelloController::class, 'index']),
    Route::get('/hello/{id}', [HelloController::class, 'hello']),
    Route::get('/', [PostController::class, 'index']),
    Route::get('/articles/{slug}', [PostController::class, 'show']),
    Route::get('/inscription',[RegisterController::class,'showRegisterForm'])
];