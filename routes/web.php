<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return <<<php
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Laravel</title>
        </head>
        <body class="firstpage">
            <h1>Страница приветствия пользователей</h1>
            <br/>
            <h3>Всем привет!!!</h3>
        </body>
    </html>
    php;
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
            <h3>Содержание новостей</h3>
        </body>
    </html>
    php;
});