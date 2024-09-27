<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Головна сторінка
Route::get('/', function () {
    return view('welcome'); 
});

// Ресурсний маршрут для постів
Route::resource('posts', PostController::class);

// Маршрут для додавання коментарів
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
