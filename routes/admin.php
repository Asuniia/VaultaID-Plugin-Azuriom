<?php

use Azuriom\Plugin\Vaultaid\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('can:vaultaid.admin')->group(function () {
    Route::get('/settings', [AdminController::class, 'show'])->name('settings');
    Route::post('/settings', [AdminController::class, 'save'])->name('settings.save');
});
