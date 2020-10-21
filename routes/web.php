<?php

use App\Http\Controllers\CardController;

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

Route::get('',          [CardController::class, 'index'])->name('index');

Route::get('shuffle',	[CardController::class, 'shuffleDeck'])->name('shuffle');

Route::get('higher',    [CardController::class, 'higher'])->name('higher');
Route::get('lower',     [CardController::class, 'lower'])->name('lower');
