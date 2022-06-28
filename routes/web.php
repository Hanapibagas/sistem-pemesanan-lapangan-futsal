<?php

use App\Http\Controllers\Frontend\JadwalController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [JadwalController::class, 'jadwal'])->name('show');
Route::get('booking', [JadwalController::class, 'booking'])->name('booking');
Route::post('booking', [JadwalController::class, 'store'])->name('store-j');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
