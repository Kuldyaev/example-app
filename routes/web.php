<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\UsersController as AdminUsersController;


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
    ->middleware(['auth','is_admin'])
    ->group(function(){
        Route::get('/', [AdminIndexController::class, 'index'])->name('index');
        Route::get('/showAllNews', [AdminIndexController::class, 'showAllNewsForAdmin'])->name('showAllNewsForAdmin');
        Route::get('/test1', [AdminIndexController::class, 'test1'])->name('test1');
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
        Route::match(['get','post'],'/profile', [AdminProfileController::class,'update'] )->name('updateProfile');

        // CRUD operation           
        Route::resources([
            'news'=> AdminNewsController::class,
            'categories'=>AdminCategoryController::class
        ]);

        Route::get('/users', [AdminUsersController::class, 'index'])->name('users');
        Route::get('/editStatus/{user}', [AdminUsersController::class, 'editStatus'])->name('editStatus');
    });

Route::name('user.')
    ->prefix('user')
    ->middleware('auth')
    ->group(function(){
        Route::match(['get','post'],'/profile', [AdminProfileController::class,'update'] )->name('profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');