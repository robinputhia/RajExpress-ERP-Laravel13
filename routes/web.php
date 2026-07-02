<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Erp\DashboardController;
use App\Http\Controllers\Erp\ModuleController;

Route::get('/', fn () => redirect('/admin'));

Route::prefix('admin')->name('erp.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/pos', [ModuleController::class, 'show'])->defaults('title', 'POS System')->name('pos');
    Route::get('/products', [ModuleController::class, 'show'])->defaults('title', 'Products')->name('products');
    Route::get('/sales', [ModuleController::class, 'show'])->defaults('title', 'Sales')->name('sales');
    Route::get('/purchase', [ModuleController::class, 'show'])->defaults('title', 'Purchase')->name('purchase');
    Route::get('/people', [ModuleController::class, 'show'])->defaults('title', 'People')->name('people');
    Route::get('/reports', [ModuleController::class, 'show'])->defaults('title', 'Reports')->name('reports');
    Route::get('/settings', [ModuleController::class, 'show'])->defaults('title', 'Settings')->name('settings');
});
