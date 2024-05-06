<?php

use Illuminate\Support\Facades\Route;
use sevag\admin\Http\Controllers\AdminController;

Route::get('/admin',[AdminController::class, 'index']);