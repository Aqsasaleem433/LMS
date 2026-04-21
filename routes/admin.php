<?php

namespace App\Http\Controllers\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DemoRequestController;
    
use Dom\Comment;
use Illuminate\Support\Facades\Route;


Route::group(
    ['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'],
    function () {

        // Dashboard
        Route::get('/', fn() => view('admin.home'))->name('dashboard');
        // user

        // Route::resource('users', UserController::class)->names('users');
        // Route::resource('roles', RoleController::class)->names('roles');

      
// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/demo-requests', [DemoRequestController::class, 'index'])->name('admin.demo');

    Route::get('/demo/{id}/approve', [DemoRequestController::class, 'approve'])->name('admin.demo.approve');

    Route::get('/demo/{id}/reject', [DemoRequestController::class, 'reject'])->name('admin.demo.reject');
   
});

    }
);
