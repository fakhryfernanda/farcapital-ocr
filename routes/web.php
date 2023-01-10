<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Auth\Registrasi;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Features\Upload;
use App\Http\Livewire\Features\Edit;
use App\Http\Livewire\Features\Profile;

Route::get('/', function () {
    return view('home');
});

//Route::get('/data', [UserController::class, 'index']);
Route::post('/edit', Edit::class);
Route::get('/dashboard', Dashboard::class); //---> ini untuk admin



Route::get('/profile', Profile::class)->middleware('islogin');

Route::get('/upload', Upload::class);


Route::post('/store', [UserController::class, 'store'])->name('store');
// ----( auth )----
Route::get('/login', Login::class)->middleware('notlogin');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrasi', Registrasi::class)->middleware('notlogin');
