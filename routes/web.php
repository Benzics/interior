<?php

use App\Http\Controllers\admin\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\ProductController as AdminProductController;

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

Route::get('/', [HomeController::class, 'index']);

Route::name('admin.')->prefix('admin')->group(function()
{
    Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'authenticate']);
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function()
    {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        // products and categories
       
        Route::resource('categories', CategoriesController::class)->except('show');
        Route::resource('products', AdminProductController::class);
        
    });
    
});