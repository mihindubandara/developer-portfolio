<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// Main Portfolio Frontend View
Route::get('/', function () {
    return view('portfolio');
});

// Admin Panel Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Projects CRUD
    Route::get('/projects', [AdminController::class, 'projects'])->name('admin.projects');
    Route::post('/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store');
    Route::delete('/projects/{id}', [AdminController::class, 'deleteProject'])->name('admin.projects.delete');

    // Messages
    Route::get('/messages', [AdminController::class, 'messages'])->name('admin.messages');
    Route::delete('/messages/{id}', [AdminController::class, 'deleteMessage'])->name('admin.messages.delete');
});