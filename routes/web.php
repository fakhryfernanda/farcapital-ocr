<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// use App\Http\Livewire\Auth\Register;
// use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Features\Edit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('form');
// });
//Route::get('/data', [UserController::class, 'index']);
//Route::get('/register', Register::class);
//Route::get('/login', Login::class);
Route::post('/edit', Edit::class);
Route::get('/dashboard', Dashboard::class);