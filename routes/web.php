<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'login'])->middleware('guest')->name('login');
Route::post('/log-session', [IndexController::class, 'log_session']);
Route::post('/logout', [IndexController::class,'logout'])->name('logout');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/home', [IndexController::class, 'index'])->name('dashboard.home');
});