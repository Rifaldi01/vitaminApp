<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController as BerandaController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\ContakController;
use App\Http\Controllers\Admin\DhasboardController;

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



Auth::routes();

Route::get('/admin/dhasboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {

    Route::get('/dhasboard', [DhasboardController::class, 'index']);
});

Route::get('/', [BerandaController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/contact', [ContakController::class, 'index']);

//admin

