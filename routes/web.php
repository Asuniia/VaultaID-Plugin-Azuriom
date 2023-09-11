<?php

use Azuriom\Plugin\Vaultaid\Controllers\VaultaidAuthController;
use Illuminate\Support\Facades\Route;


Route::get('/redirect', [VaultaidAuthController::class, 'redirect'])->name('redirect');
Route::get('/callback', [VaultaidAuthController::class, 'callback'])->name('callback');
