<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register.show');
    Route::post('/register', 'registerUser')->name('register.store');
    Route::get('/login', 'login')->name('login.show');
    Route::post('/login', 'loginUser')->name('login.signup');
    Route::get('/logout', 'logOut')->name('logout.user'); 
});


Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('home');
Route::get('/', [ContactController::class, 'contact'])->name('contact.show');
Route::POST('/contact', [ContactController::class, 'store'])->name('contact.store');