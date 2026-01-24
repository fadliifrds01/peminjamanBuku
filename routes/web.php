<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\Transaction\TransactionController;
use App\Http\Controllers\Admin\Anggota\AnggotaController;
use App\Http\Controllers\admin\anggota\InputAnggotaController;
use App\Http\Controllers\admin\dataBuku\BukuController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/dataBuku', [BukuController::class, 'showDataBuku'])->name('dataBuku');
Route::get('/inputBuku', [BukuController::class, 'showInputBuku'])->name('inputBuku');
Route::get('/transaction', [TransactionController::class, 'showTransaction'])->name('transaction');
Route::get('/anggota', [AnggotaController::class, 'showAnggota'])->name('anggota');
Route::get('/inputAnggota', [InputAnggotaController::class, 'showInputAnggota'])->name('inputAnggota');

// Route::get('/inputBuku', [InputBukuController::class, 'showInputBuku'])->name('inputBuku');
// Route::get('/', function () {   
//     return view('Auth.login');
// }) ->name('login');
// Route::get('register', function () {
//     return view('Auth.register');
// }) ->name('register');
// Route::get('/admin.dashboard', function () {
//     return view('admin.dashboard');
// }) ->name('dashboard');