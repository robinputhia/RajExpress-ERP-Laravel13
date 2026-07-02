<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Erp\DashboardController;

Route::get('/', function () {
    return redirect('/admin');
});

Route::get('/admin', [DashboardController::class, 'index'])->name('erp.dashboard');
