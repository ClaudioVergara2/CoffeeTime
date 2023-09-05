<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [AuthController::class, 'landing']);

Route::get('/menu', [AuthController::class, 'menu']);

Route::get('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'attempt'])->name('login.attempt');

Route::get('/', function () {
    return view('welcome');
});
