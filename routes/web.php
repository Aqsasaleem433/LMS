<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoRequestController;

Route::get('/', function () {
    return view('front.index');
});

// Route::post('/demo-request', [DemoController::class, 'store'])
//     ->name('demo-request');


// Route::get('/', function () {
//     return view('admin.home');
// })->middleware(['auth', 'verified'])->name('home');
//   Route::get('/admin/email', [HomeController::class, 'email'])->name('admin.email');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
include 'admin.php';

require __DIR__.'/auth.php';
