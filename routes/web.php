<?php

use App\Livewire\Admin\AdminDashboard;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['teacher', 'auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('teacher.dashboard');
});

Route::middleware(['admin', 'auth', 'verified'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
});

require __DIR__.'/settings.php';
