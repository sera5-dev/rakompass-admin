<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'verify'])->name('verify');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/program', [ProgramController::class, 'index'])->name('program');
Route::post('/program', [ProgramController::class, 'store'])->name('program-store');
Route::delete('/program', [ProgramController::class, 'destroy'])->name('program-destroy');

Route::get('/crews', [CrewController::class, 'index'])->name('crew');
