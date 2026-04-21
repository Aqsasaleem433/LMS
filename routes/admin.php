<?php

namespace App\Http\Controllers\Admin;

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

        // Scholarship management (full CRUD)
        Route::resource('', ScholarshipController::class);

        // Application review
        Route::prefix('applications')->name('application_review.')->group(function () {
            Route::get('/', [ApplicationReviewController::class, 'index'])->name('index');
            Route::get('{application}', [ApplicationReviewController::class, 'show'])->name('show');
            Route::patch('{application}/status', [ApplicationReviewController::class, 'updateStatus'])
                ->name('updateStatus');
        });

    }
);
