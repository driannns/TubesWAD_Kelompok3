<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RiwayatController;
use GuzzleHttp\Middleware;

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
Route::get('/loin', [LoginController::class, 'indx']);
Route::post('/loin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi/store', [RegistrasiController::class, 'store']);


Route::get('/', [ObatController::class, 'index']);

Route::middleware(['auth', 'cektipe:user'])->group(function() {
    Route::get('/obat', [ObatController::class, 'obat']);
    Route::get('/obat/show/{id}', [ObatController::class, 'show']);
    Route::post('/obat/add', [ObatController::class, 'store']);
    Route::get('/obat/input', [ObatController::class, 'input']);
    Route::get('/obat/obat', [ObatController::class, 'display']);
    
    
    Route::get('/konsultasi', [KonsultasiController::class, 'index']);
    Route::post('/konsultasi/store/{id}', [KonsultasiController::class, 'store']);
    
Route::get('/riwayat/{user_id}', [RiwayatController::class, 'index']);
    // Route::get('/riwayat/{user_id}', [RiwayatController::class, 'user']);
    Route::get('/riwayat/detail/{id}', [RiwayatController::class, 'riwayat']);
    Route::get('/aboutus', [ObatController::class, 'aboutus']);
});

Route::middleware(['auth', 'cektipe:admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/detail/{id}', [AdminController::class, 'detail']);
    Route::get('/admin/cancel/{id}', [AdminController::class, 'cancel']);
    Route::post('/admin/cancel/update/{id}', [AdminController::class, 'cancelUpdate']);
    Route::post('/admin/update/{id}', [AdminController::class, 'update']);
});