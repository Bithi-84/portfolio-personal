<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/',[FrontendController::class,'index']);

// Admin Login Page

Route::get('/admin/login',[AdminController::class,'adminLogin']);
Route::get('/admin/logout',[AdminController::class,'adminLogout']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',[DashboardController::class,'adminDashboard']);