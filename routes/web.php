<?php

use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/**
 * TODO:: Add user auth & middleware to routes
 **/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::controller(IngredientController::class)->prefix('ingredient')->name('ingredients.')->group(function () {
    Route::get('/create', [IngredientController::class, 'create'])->name('create');
    Route::post('/store', [IngredientController::class, 'store'])->name('store');
    Route::get('/{ingredient}/edit', [IngredientController::class, 'edit'])->name('edit');
    Route::patch('/{ingredient}', [IngredientController::class, 'update'])->name('update');
    Route::delete('/{ingredient}', [IngredientController::class, 'destroy'])->name('destroy');
});
