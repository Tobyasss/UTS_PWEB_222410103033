<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'login']);
Route::get('/logout', [PageController::class, 'logout'])->name('logout');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::post('/buy/{id}', [PageController::class, 'buy'])->name('buy');
Route::get('/topup', [PageController::class, 'topupForm'])->name('topup');
Route::post('/topup', [PageController::class, 'topup']);
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
