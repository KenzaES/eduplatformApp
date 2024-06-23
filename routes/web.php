<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentification routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/instructor/dashboard', function () {
        return view('instructor.dashboard');
    })->name('instructor.dashboard');

    Route::get('/learner/dashboard', function () {
        return view('learner.dashboard');
    })->name('learner.dashboard');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
