<?php

use App\Http\Controllers\FronendController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/about', [FronendController::class, 'about']) -> name('about');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/', [FronendController::class, 'index']) -> name('home');
    Route::get('/pos', [FronendController::class, 'pos']) -> name('pos');

    //Product Category
    Route::get('/product/category', [CategoryController::class, 'index']) -> name('category');
    //Product

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
