<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowroomsController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/showrooms/Profile-Rida', [RegisterController::class, 'profile']);
Route::put('/showrooms/Profile-Rida/{id}', [RegisterController::class, 'update']);

Route::get('/', [ShowroomsController::class, 'index']);
Route::get('/showrooms', [ShowroomsController::class, 'index'])->middleware('auth');
Route::get('/showrooms/create', [ShowroomsController::class, 'create'])->middleware('auth');
Route::post('/showrooms/store', [ShowroomsController::class, 'store'])->middleware('auth');
Route::post('/showrooms/{id}/edit', [ShowroomsController::class, 'edit'])->middleware('auth');
Route::put('/showrooms/{id}', [ShowroomsController::class, 'update'])->middleware('auth');
Route::delete('/showrooms/{id}', [ShowroomsController::class, 'delete'])->middleware('auth');
Route::get('/showrooms/ListCar-Rida', [ShowroomsController::class, 'tampil'])->middleware('auth');
Route::get('/showrooms.Detail-Rida/{id}', [ShowroomsController::class, 'detail'])->middleware('auth');