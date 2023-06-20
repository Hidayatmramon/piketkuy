<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;


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

//setelah login, hanya yang admin bisa akes 
Route::middleware(['isLogin', 'cekRole:admin'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
});


//setelah login hanya user biasa yg bisa akses
Route::middleware(['isLogin', 'cekRole:user'])->group(function () {
    Route::get('/home', [PageController::class, 'home'])->name('home');
    Route::get('/student', [StudentController::class, 'index'])->name('student.index'); 
    Route::get('tabel/{slug}',[PageController::class, 'detilHari'])->name('detil.hari');
});


//yg bisa akses hanya untuk yg blum login, kalo udah login ga bisa akses 
Route::middleware(['isGuest'])->group(function () {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('/login/post', [LoginController::class, 'auth'])->name('auth');
});


//logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
