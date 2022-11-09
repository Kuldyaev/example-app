<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/auth', [AuthController::class, 'index'])->name('auth');

Route::prefix('news')->group(function(){
    Route::get('/addOne', [NewsController::class, 'addOne'])->name('news.addOne');
    Route::get('/categories', [NewsController::class, 'categories'])->name('news.categories');
});