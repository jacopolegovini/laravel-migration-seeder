<?php

use App\Http\Controllers\CheckerController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\TicketController;
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

Route::get('/', [TrainController::class, 'index'])->name('train');
Route::get('/passenger', [PassengerController::class, 'index'])->name('passenger');
Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
Route::get('/checker', [CheckerController::class, 'index'])->name('checker');
