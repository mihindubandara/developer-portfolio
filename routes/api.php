<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PortfolioController;

// GET Endpoints (Data ගන්න)
Route::get('/profile', [PortfolioController::class, 'getProfile']);
Route::get('/skills', [PortfolioController::class, 'getSkills']);
Route::get('/projects', [PortfolioController::class, 'getProjects']);
Route::get('/education', [PortfolioController::class, 'getEducation']);

// POST Endpoint (Contact form data යවන්න)
Route::post('/contact', [PortfolioController::class, 'sendMessage']);