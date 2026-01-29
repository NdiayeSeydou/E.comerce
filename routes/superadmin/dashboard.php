<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\DashboardController;

Route::prefix('superadmin')->group(function () {

    Route::controller(DashboardController::class)->group(function () {

        // Tableau de bord du supermAdmin
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('superadmin.dashboard');
    });
});
