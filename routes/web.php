<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DetailEventController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/event', [EventController::class, 'index'])->name('events.index');
Route::get('/detail/{id}', [DetailEventController::class, 'show'])->name('event.detail');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::prefix('payment')->group(function () {
    Route::get('/{registrationId}', [PaymentController::class, 'show'])->name('payment.show');
    Route::post('/{registrationId}/upload', [PaymentController::class, 'upload'])->name('payment.upload');
});