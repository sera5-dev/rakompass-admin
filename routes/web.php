<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\ProgramController;

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

Route::get('/programs', [ProgramController::class, 'index'])->name('programs');
Route::get('/programs/{id}', [ProgramController::class, 'show'])->name('programs-show');
Route::post('/programs', [ProgramController::class, 'store'])->name('programs-store');
Route::post('/programs/{id}/crews', [ProgramController::class, 'storeCrew'])->name('programs-crew-store');
Route::post('/programs/{id}/schedules', [ProgramController::class, 'storeSchedule'])->name('programs-schedule-store');
Route::post('/programs/{id}/episodes', [ProgramController::class, 'storeEpisode'])->name('programs-episode-store');
Route::delete('/programs/{id}/crews', [ProgramController::class, 'destroyCrew'])->name('programs-crew-destroy');
Route::delete('/programs/{id}/episodes', [ProgramController::class, 'destroyCrew'])->name('programs-episode-destroy');
Route::delete('/programs', [ProgramController::class, 'destroy'])->name('programs-destroy');

Route::get('/crews', [CrewController::class, 'index'])->name('crews');
Route::get('/crews/{id}', [CrewController::class, 'show'])->name('crews-show');
Route::post('/crews', [CrewController::class, 'store'])->name('crews-store');
Route::delete('/crews', [CrewsController::class, 'destroy'])->name('crews-destroy');
