<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('verified');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('verified');

Route::get('/auth/github/redirect', [LoginController::class, 'redirectToProvider'])->name('auth.github');

Route::get('/auth/github/callback', [LoginController::class, 'handleProviderCallback']);
