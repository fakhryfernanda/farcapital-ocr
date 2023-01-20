<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\AccessDenied;
use App\Http\Livewire\Auth\Registrasi;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Features\Upload;
use App\Http\Livewire\Features\Profile;
use App\Http\Livewire\Home;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ChangePassword;
use App\Http\Livewire\Auth\SuccessSendEmail;
use App\Http\Livewire\Auth\VerificationSuccess;
use App\Http\Livewire\Auth\FormResendValidation;

Route::get('/', Home::class);
Route::get('/accessdenied', AccessDenied::class);

// Admin
Route::get('/dashboard', Dashboard::class);
Route::get('/profile', Profile::class);

// User
Route::get('/profile/{id}', Profile::class);
Route::get('/scan', Upload::class)->name('scan');
Route::post('/store', [UserController::class, 'store'])->name('store');

// ----( auth )----
Route::get('/login', Login::class)->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrasi', Registrasi::class);
Route::get('/forgotpassword', ForgotPassword::class);
Route::get('/forgotpassword/{token}', ChangePassword::class);

// Route::get('/verificationsuccess', VerificationSuccess::class);
Route::get('/successsendemail', SuccessSendEmail::class);
Route::get('/emailvalidation/{token}', VerificationSuccess::class);
Route::get('/emailvalidation', FormResendValidation::class);