<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use sevag\admin\Http\Controllers\AdminController;

Route::get('/admin',[AdminController::class, 'index']);