<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/auth', [AuthController::class, 'index'])->name('auth');

Route::name('news.')
    ->prefix('news')
    ->group(function(){
        Route::get('/addOne', [NewsController::class, 'addOne'])->name('addOne');
        Route::get('/showAll', [NewsController::class, 'showAllNews'])->name('showAllNews');
        Route::get('/showOne/{id}', [NewsController::class, 'showOne'])->name('showOne');
        Route::name('categories.')
            ->prefix('categories')
            ->group(function(){
                Route::get('/', [NewsController::class, 'categories'])->name('all');
                Route::get('/{category_id}', [NewsController::class, 'showOneCategory'])
                    ->where('category_id', '[0-9]+')
                    ->name('showOneCategory');
            });
});

//  Route::get('/save', [NewsController::class, 'save'])->name('save');

Route::name('admin.')
    ->prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/', [AdminIndexController::class, 'index'])->name('index');
        Route::get('/test1', [AdminIndexController::class, 'test1'])->name('test1');
        Route::get('/test2', [AdminIndexController::class, 'test2'])->name('test2');
        Route::match(['get','post'],'/create', [AdminIndexController::class, 'create'])->name('create');
        Route::name('download.')
            ->prefix('download')
            ->group(function(){
                Route::get('/news', [AdminIndexController::class, 'downloadNews'])->name('downloadNews');
                Route::get('/categories', [AdminIndexController::class, 'downloadCategories'])->name('downloadCategories');
            });    
        }
    );



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
