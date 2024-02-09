<?php

use App\Controllers\HelloController;
use App\Controllers\PostController;
use MVC\Route;

return [
    Route::get('/', [HelloController::class, 'index']),
    Route::get('/hello/{id}', [HelloController::class, 'hello']), // J'ai fait le sournois mon précieux
    Route::get('/', [PostController::class, 'index']),
];
