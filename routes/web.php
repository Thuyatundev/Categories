<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


Route::get('/',[PostController::class,'index']);

Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{id}/edit',[PostController::class,'edit']);
Route::post('/posts',[PostController::class,'store']);
Route::get('/posts/create',[PostController::class,'create'])->middleware('myauth');
Route::get('/posts/{id}',[PostController::class,'show']);
Route::put('/posts/{id}',[PostController::class,'update']);
Route::delete('/posts/{id}',[PostController::class,'destroy']);


// Route::resource('posts',PostController::class);

Route::get('register',[RegisterController::class, 'create']);
Route::post('register',[RegisterController::class, 'store']);

Route::get('login',[LoginController::class, 'create']);
Route::post('login',[LoginController::class, 'store']);

Route::get('logout',[LoginController::class, 'destroy']);