<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\dataBuku\DataBukuController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/dataBuku', [DataBukuController::class, 'showDataBuku'])->name('dataBuku');

// Route::get('/', function () {   
//     return view('Auth.login');
// }) ->name('login');
// Route::get('register', function () {
//     return view('Auth.register');
// }) ->name('register');
// Route::get('/admin.dashboard', function () {
//     return view('admin.dashboard');
// }) ->name('dashboard');