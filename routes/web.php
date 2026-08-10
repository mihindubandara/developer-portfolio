<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Api\PortfolioController;

// 1. Main Portfolio Frontend View
Route::get('/', function () {
    return view('portfolio');
});

// 2. Portfolio REST API Routes
Route::prefix('api')->group(function () {
    Route::get('/profile', [PortfolioController::class, 'getProfile']);
    Route::get('/skills', [PortfolioController::class, 'getSkills']);
    Route::get('/projects', [PortfolioController::class, 'getProjects']);
    Route::get('/education', [PortfolioController::class, 'getEducation']);
    Route::post('/contact', [PortfolioController::class, 'sendMessage'])->name('contact.send');
});

// 3. Admin Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// 4. Temporary Secure Admin Setup Route (Reads credentials from Vercel Env Variables)
Route::get('/setup-admin-user', function () {
    $email = env('ADMIN_EMAIL');
    $password = env('ADMIN_PASSWORD');

    if (!$email || !$password) {
        return 'Admin environment variables (ADMIN_EMAIL, ADMIN_PASSWORD) are missing!';
    }

    \App\Models\User::updateOrCreate(
        ['email' => $email],
        [
            'name' => 'Admin',
            'password' => \Illuminate\Support\Facades\Hash::make($password)
        ]
    );

    return 'Admin user created/updated successfully from environment variables!';
});

// 5. Protected Admin Routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Projects CRUD
    Route::get('/projects', [AdminController::class, 'projects'])->name('admin.projects');
    Route::post('/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store');
    Route::delete('/projects/{id}', [AdminController::class, 'deleteProject'])->name('admin.projects.delete');

    // Messages
    Route::get('/messages', [AdminController::class, 'messages'])->name('admin.messages');
    Route::delete('/messages/{id}', [AdminController::class, 'deleteMessage'])->name('admin.messages.delete');
});