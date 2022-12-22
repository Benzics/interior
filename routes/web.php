<?php

use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\ApartmentCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\ApartmentController;
use App\Http\Controllers\admin\PasswordController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\SectionController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('install', function(){
    Artisan::call('key:generate');
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');
});
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
        Route::resource('apartment-categories', ApartmentCategoryController::class)->except('show');
        Route::resource('products', AdminProductController::class);
        Route::resource('apartments', ApartmentController::class);
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
        Route::post('/settings', [SettingController::class, 'store']);

        Route::get('/password', [PasswordController::class, 'index'])->name('password');
        Route::post('/password', [PasswordController::class, 'store']);

        Route::get('/profile', [PasswordController::class, 'profile'])->name('profile');
        Route::post('/profile', [PasswordController::class, 'editProfile']);
        Route::resource('banners', BannerController::class)->except('show');
        Route::resource('pages', PageController::class)->except('show');
        Route::resource('sections', SectionController::class)->except('show');

    });
    
});

Route::get('placeholder-image/{size}', [HomeController::class, 'placeholderImage'])->name('placeholder.image');
Route::get('pages/{url}', [PagesController::class, 'page'])->name('pages');
Route::controller(ProductController::class)->group(function(){
    Route::get('products/{id}', 'product')->name('products.single');
    Route::get('apartments/{id}', 'apartment')->name('apartments.single');
    Route::get('categories/{id}', 'singleCategory')->name('categories.single');
    Route::get('apartment-categories/{id}', 'singleApartmentCategory')->name('apartments.category');
});