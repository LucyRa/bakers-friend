<?php

use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/**
 * TODO:: Add user auth & middleware to routes
 **/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::controller(IngredientController::class)->group(function () {}

);
