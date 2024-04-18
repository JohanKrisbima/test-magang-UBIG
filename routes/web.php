<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use GuzzleHttp\Middleware;

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



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->Middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->Middleware('auth');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->Middleware('auth');
Route::get('/mahasiswa/search', [MahasiswaController::class, 'search'])->Middleware('auth');
Route::get('/addData', [MahasiswaController::class, 'addData'])->Middleware('auth');
Route::post('/createMahasiswa', [MahasiswaController::class, 'create'])->Middleware('auth');
Route::get('/updateMahasiswa/{Mahasiswa:id}', [MahasiswaController::class, 'updateMahasiswa'])->Middleware('auth');
Route::put('/updateMahasiswa/{Mahasiswa:id}', [MahasiswaController::class, 'update'])->Middleware('auth');
Route::delete('/deleteMahasiswa/{Mahasiswa:id}', [MahasiswaController::class, 'destroy'])->Middleware('auth');


Route::get('/kota', [KotaController::class, 'index'])->Middleware('auth');
Route::get('/addKota', [KotaController::class, 'addData'])->Middleware('auth');
Route::post('/createKota', [KotaController::class, 'create'])->Middleware('auth');
Route::delete('/deleteKota/{Kota:id}', [KotaController::class, 'destroy'])->Middleware('auth');
Route::get('/updateKota/{Kota:id}', [KotaController::class, 'updateKota'])->Middleware('auth');
Route::put('/updateKota/{Kota:id}', [KotaController::class, 'update'])->Middleware('auth');