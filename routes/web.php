<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\DailyEntryForm;
use App\Http\Controllers\DashboardController;

Route::view('/', 'home')->name('home');

Route::get('/dailyentryform', DailyEntryForm::class)
    ->name('daily-entries');

Route::get('/dailyentry/{entry}', [DashboardController::class, 'entry'])
    ->middleware(['auth', 'verified'])
    ->name('daily-entry');

Volt::route('/dailyentryform', 'daily-entry-form')
    ->name('daily-entry-form');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
