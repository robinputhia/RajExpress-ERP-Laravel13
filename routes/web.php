<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Erp\DashboardController;
use App\Http\Controllers\Erp\ModuleController;
use App\Http\Controllers\Erp\ProductController;
use App\Http\Controllers\Erp\SalesController;
use App\Http\Controllers\Erp\PurchaseController;
use App\Http\Controllers\Erp\PeopleController;

Route::get('/', fn () => redirect('/admin'));

Route::prefix('admin')->name('erp.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/sales', [SalesController::class, 'index'])->name('sales');
    Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');
    Route::get('/people', [PeopleController::class, 'index'])->name('people');

    Route::get('/pos', [ModuleController::class, 'show'])->defaults('title', 'POS System')->name('pos');
    Route::get('/reports', [ModuleController::class, 'show'])->defaults('title', 'Reports')->name('reports');
    Route::get('/settings', [ModuleController::class, 'show'])->defaults('title', 'Settings')->name('settings');
});
