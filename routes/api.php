<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('book', [BookingController::class, 'store'])->name('api.book');
Route::get('mark-product/:id', [BookingController::class, 'markRead'])->name('api.mark-product');
Route::get('unmark-product/:id', [BookingController::class, 'markUnread'])->name('api.unmark-product');