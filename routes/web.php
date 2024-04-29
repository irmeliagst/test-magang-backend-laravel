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

Route::resource('book', \App\Http\Controllers\BookController::class);
Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::get('/welcome', [LandingPageController::class, 'index'])->name('welcome.index');
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('book/search', [BookController::class, 'search'])->name('books.search');
