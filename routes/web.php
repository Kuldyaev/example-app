<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/auth', [AuthController::class, 'index'])->name('auth');

Route::name('news.')
    ->prefix('news')
    ->group(function(){
        Route::get('/showAll', [NewsController::class, 'showAllNews'])->name('showAllNews');
        Route::get('/showOne/{news}', [NewsController::class, 'showOne'])->name('showOne');
        Route::name('categories.')
            ->prefix('categories')
            ->group(function(){
                Route::get('/', [NewsController::class, 'categories'])->name('all');
                Route::get('/{category_id}', [NewsController::class, 'showOneCategory'])
                    ->where('category_id', '[0-9]+')
                    ->name('showOneCategory');
            });
});

Route::name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/', [AdminIndexController::class, 'index'])->name('index');
        Route::get('/showAllNews', [AdminIndexController::class, 'showAllNewsForAdmin'])->name('showAllNewsForAdmin');
        Route::get('/test1', [AdminIndexController::class, 'test1'])->name('test1');
        Route::get('/test2', [AdminIndexController::class, 'test2'])->name('test2');
        Route::name('download.')
            ->prefix('download')
            ->group(function(){
                Route::get('/', [AdminIndexController::class, 'mydownload'])->name('download');
                Route::name('json.')
                    ->prefix('json')
                    ->group(function(){
                        Route::get('/news', [AdminIndexController::class, 'downloadNews'])->name('news');
                        Route::get('/categories', [AdminIndexController::class, 'downloadCategories'])->name('categories');
                        Route::match(['get','post'],'/category', [AdminIndexController::class, 'downloadOneCategory'])->name('category');
                    });
                    Route::name('excel.')
                    ->prefix('excel')
                    ->group(function(){
                        Route::get('/news', [NewsController::class, 'exportBasic'])->name('news');
                    });
            
            });  
            
        // CRUD operation           
        Route::resources([
            'news'=> AdminNewsController::class,
            'categories'=>AdminCategoryController::class
        ]);
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');