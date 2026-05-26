<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', function () {
    return view('landing');
});

// Dashboard route - requires authentication and email verification
// The 'auth' middleware ensures only authenticated users can access this route
// The 'verified' middleware ensures users have verified their email address
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile management routes - all require authentication
// The 'auth' middleware ensures only authenticated users can access these routes
Route::middleware('auth')->group(function () {
    // View profile page
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Update profile (PATCH method for partial updates)
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Delete user account (DELETE method for resource deletion)
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include authentication routes (login, register, password reset, email verification)
// This file contains all the authentication-related routes with proper middleware
require __DIR__.'/auth.php';
