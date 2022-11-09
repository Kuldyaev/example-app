<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/auth', [AuthController::class, 'index']);

Route::prefix('news')->group(function(){
    Route::get('/addOne', [NewsController::class, 'addOne']);
    Route::get('/news', function () {
        return <<<php
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Laravel</title>
            </head>
            <body class="firstpage">
                <h1>Новости</h1>
                <br/>
                <h3>Содержание новостей на сайте </h3>
            </body>
        </html>
        php;
    });
});

Route::get('/about', function () {
    return <<<php
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Laravel</title>
        </head>
        <body class="firstpage">
            <h1>O проекте</h1>
            <br/>
            <h3>Учебный проект - агрегатор новостей на Laravel</h3>
        </body>
    </html>
    php;
});

