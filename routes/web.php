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

Route::get('/', Home::class);
Route::get('/accessdenied', AccessDenied::class);

// Admin
Route::get('/dashboard', Dashboard::class)->middleware(['isadmin', 'islogin']);
Route::get('/profile/{id}', Profile::class)->name('profile')->middleware(['isadmin', 'islogin']);

// User
Route::get('/profile', Profile::class)->middleware(['isuser', 'islogin']);
Route::get('/upload', Upload::class)->middleware(['isuser', 'islogin']);
Route::post('/store', [UserController::class, 'store'])->name('store');

// ----( auth )----
Route::get('/login', Login::class)->middleware('notlogin')->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrasi', Registrasi::class)->middleware('notlogin');
Route::get('/forgotpassword', ForgotPassword::class);
Route::get('/changepassword/{token}', ChangePassword::class);
Route::get('/successsendemail', SuccessSendEmail::class);