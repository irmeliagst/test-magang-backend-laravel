<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/bukus', \App\Http\Controllers\BookController::class);
Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::get('/dashboard', [BookController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin.index');
// Route::get('/admin/addbook', 'App\Http\Controllers\AdminController@addBook')->name('admin.addbook');
// Route::get('/', [BookController::class, 'welcome'])->name('welcome');
Route::get('/welcome', [LandingPageController::class, 'index'])->name('welcome.index');
Route::get('/bukus', [BookController::class, 'index'])->name('bukus.index');
Route::get('buku/search', [BookController::class, 'search'])->name('bukus.search');

