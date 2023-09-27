<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//route resource
Route::resource('/', [PostController::class,'index']);

Route::get('/post/create', [PostController::class,'create'])->name('posts.create');

Route::post('/post/store',[PostController::class,'store'])->name('posts.store');

Route::post('/post/show/{id}',[PostController::class,'show'])->name('posts.show');

Route::post('/post/delete/{id}', [PostController::class,'destroy'])->name('posts.destroy');


Route::post('/post/update/{id}', [PostController::class,'update'])->name('posts.update');

Route::post('/post/edit/{id}', [PostController::class,'edit'])->name('posts.edit');