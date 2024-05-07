<?php

use Illuminate\Support\Facades\Route;
use sevag\admin\Http\Controllers\AdminController;



Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    Route::prefix('users')->group(function () {
        Route::get('/', function () {
            return "users";
        });
        Route::get('/login', function () {
            return "login";
        });
    });
});
