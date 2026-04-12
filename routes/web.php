<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VisitingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VisitingController::class, 'home'])->name('home');
Route::get('/visiting', [VisitingController::class, 'index'])->name('visiting.index');
Route::get('/visiting/{visiting}', [VisitingController::class, 'show'])->name('visiting.show');
Route::delete('/visiting/{visiting}', [VisitingController::class, 'destroy'])->name('visiting.destroy');
Route::patch('/visiting/{visiting}/approve', [VisitingController::class, 'approve'])->name('visiting.approve');
Route::post('/visiting', [VisitingController::class, 'store'])->name('visiting.store');

Route::get('/login', [LoginController::class, 'loginPage'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/akun', [AccountController::class, 'index'])->name('account');
    Route::put('/akun', [AccountController::class, 'update'])->name('account.update');
    Route::put('/akun/password', [AccountController::class, 'updatePassword'])->name('account.password');
});
