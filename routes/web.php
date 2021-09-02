<?php

use App\Http\Controllers\guru\DashboardGuruController;
use App\Http\Controllers\guru\DiskusiGuruController;
use App\Http\Controllers\home\AuthController;
use App\Http\Controllers\guru\KelasGuruController;
use App\Http\Controllers\guru\ModulGuruController;
use App\Http\Controllers\guru\TugasGuruController;
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

Route::get('/', function () {
    return view('layouts/wrapper', [
        'content'      => 'home/index'
    ]);
});


Route::get('/login', [AuthController::class, 'index'])->middleware('guest');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'doRegister']);


// =========== Guru =============
Route::resource('/guru/kelas', KelasGuruController::class);

Route::get('/guru/dashboard', [DashboardGuruController::class, 'index']);

Route::resource('/guru/modul', ModulGuruController::class);
Route::resource('/guru/diskusi', DiskusiGuruController::class);
Route::resource('/guru/tugas', TugasGuruController::class);
Route::resource('/guru/quiz', TugasGuruController::class);
