<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect('/admin');
});

// Route::get('/connect', function () {
//     return 'web spa connected';
// });

Route::post('/orders', [OrderController::class, 'store']);

Route::prefix('admin')->group(function() {
    Route::name('admin.')->group(function() {
        Route::get('/', [DashboardController::class, 'index']);
        Route::resource('categories', CategoryController::class);
        Route::resource('brands', BrandController::class);
        Route::resource('products', ProductController::class);
        Route::resource('users', UserController::class);

        Route::get('/orders', [OrderController::class, 'index']);

        Route::get('/notifications', [ProfileController::class, 'notifications']);
        Route::get('/profile', [ProfileController::class, 'profile']);
    });
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
