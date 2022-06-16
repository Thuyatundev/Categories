<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/posts',[PostController::class,'index']);
// Route::get('/posts/{id}/edit',[PostController::class,'edit']);
// Route::post('/posts',[PostController::class,'store']);
// Route::get('/posts/create',[PostController::class,'create']);
// Route::get('/posts/{id}',[PostController::class,'show']);
// Route::put('/posts/{id}',[PostController::class,'update']);
// Route::delete('/posts/{id}',[PostController::class,'destroy']);

Route::resource('posts',PostController::class);

