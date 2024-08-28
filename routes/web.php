<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin'], function () {
    // Public routes (accessible before login)
    Route::get('login', [AdminController::class, 'index'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login'])->name('admin.login.post');
    
    // Routes accessible after login
    Route::middleware(['auth', 'verified', 'role:1,2,3'])->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::group(['prefix' => 'category'], function () {
            Route::get('list', [CategoryController::class, 'index'])->name('category.list');
            Route::get('add', [CategoryController::class, 'add'])->name('category.add');
            Route::post('store', [CategoryController::class, 'store'])->name('category.store');
        });
    });
});

require __DIR__.'/auth.php';
