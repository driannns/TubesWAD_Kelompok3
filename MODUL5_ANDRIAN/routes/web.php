<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('showrooms.index');
});
Route::get('/showrooms/Profile-Andrian', function (){
    return view('showrooms.Profile-Andrian');
});
Route::get('/showrooms', [ShowroomController::class, 'index']);
Route::get('/showrooms/add', [ShowroomController::class, 'add']);
Route::post('/showrooms/store', [ShowroomController::class, 'store']);
Route::get('/showrooms/ListCar-Andrian', [ShowroomController::class, 'show']);
Route::get('/showrooms/Detail-Andrian/{id}', [ShowroomController::class, 'detail']);
Route::post('/showrooms/edit/{id}', [ShowroomController::class, 'edit']);
Route::put('/showrooms/update/{id}', [ShowroomController::class, 'update']);
Route::delete('/showrooms/{id}', [ShowroomController::class, 'destroy']);
Route::put('/showrooms/Profile-Andrian/{id}', [HomeController::class, 'update']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
