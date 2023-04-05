<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth:web'])->group(function() {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/profile', 'show')->name('profile');
        Route::put('/profile/{id}', 'update');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('view.category');
        Route::get('/category/add', 'create')->name('form.category');
        Route::get('/category/{id}/edit', 'edit');
    
        Route::put('/category/{id}', 'update');
        Route::post('/category', 'store')->name('add.category');
        Route::post('/category/delete', 'destroy')->name('destroy.category');
    });
    
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index')->name('view.product');
        Route::get('/product/add', 'create')->name('form.product');
        Route::get('/product/{id}/show', 'show');
        Route::get('/product/{id}/edit', 'edit');
    
        Route::put('/product/{id}', 'update');
        Route::post('/product', 'store')->name('add.product');
        Route::post('/product/delete', 'destroy')->name('destroy.product');
    });
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('form.register');
    Route::get('/login', 'login')->name('login');

    Route::post('/register', 'doRegister')->name('do.register');
    Route::post('/login', 'doLogin')->name('do.login');
});