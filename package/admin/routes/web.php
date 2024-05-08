<?php

use sevag\admin\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use sevag\admin\Http\Controllers\AdminController;



Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    Route::prefix('users')->group(function () {
        Route::get('/', function () {
            return "users";
        });

        Route::get('/login', [UserController::class, 'login'])->name('users.login');
        Route::post('/login', [UserController::class, 'login'])->name('users.login');
    });
});
