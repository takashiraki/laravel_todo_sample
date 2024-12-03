<?php

declare(strict_types=1);

use App\Http\Controllers\todo\CreateTodoController;
use App\Http\Controllers\todo\SearchTodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo/create', function () {
    return view('todo');
});

Route::post('/todo/store', [CreateTodoController::class, 'handle']);

Route::get('/todos', [SearchTodoController::class, 'index']);
