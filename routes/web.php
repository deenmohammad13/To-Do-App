<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', action:[TodoController::class, 'index']);
Route::post('/todos', action:[TodoController::class, 'postTodo']);
Route::patch('/todos/status/{id}', action:[TodoController::class, 'updateStatus']);
Route::get('/todos/update/{id}', action:[TodoController::class, 'edit']);
Route::patch('/todos/update/{id}', action:[TodoController::class, 'updateTodo']);
Route::delete('/todos/delete/{id}', action:[TodoController::class, 'deleteTodo']);

