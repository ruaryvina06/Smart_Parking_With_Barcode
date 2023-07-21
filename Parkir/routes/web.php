<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MultiUser;
use App\Http\Controllers\ParkirController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\VehicleController;
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

Route::get('/', [MultiUser::class, 'index'])->name('multi-user');
Auth::routes();
Route::view('/not-found', 'landing.404')->name('not-found');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
//Route::get('/log', [LogController::class, 'index'])->name('loginn');
//Route::view('/beranda', 'landing.beranda')->name('beranda');
// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'cekrole:pelanggan']], function () {
    Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicle');
    Route::post('/vehicle/store', [VehicleController::class, 'store'])->name('vehicle-store');
    Route::get('/pembayaran', [VehicleController::class, 'pembayaran'])->name('pembayaran');
    Route::get('/lokasi', [TempController::class, 'index'])->name('lokasi');
});

Route::group(['middleware' => ['auth', 'cekrole:admin']], function () {
    //Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::view('/bayar', 'admin.parkir.bayar-parkir')->name('bayar');
    Route::post('/data-bayar', [ParkirController::class, 'bayar'])->name('data-bayar');
    Route::post('/bayar/kofirmasi', [ParkirController::class, 'konfirmasi'])->name('konfirmasi');

    Route::get('/parkir', [ParkirController::class, 'index'])->name('parkir');
    Route::post('/parkir/{id}/update', [ParkirController::class, 'update'])->name('parkir-update');
    Route::post('/parkir/{id}/destroy', [ParkirController::class, 'destroy'])->name('parkir-destroy');

    Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan');
    Route::post('/kendaraan/{id}/update', [KendaraanController::class, 'update'])->name('kendaraan-update');
    Route::post('/kendaraan/{id}/destroy', [KendaraanController::class, 'destroy'])->name('kendaraan-destroy');

    Route::get('/tempat', [TempatController::class, 'index'])->name('tempat');
    Route::post('/tempat/store', [TempatController::class, 'store'])->name('tempat-store');
    Route::post('/tempat/{id}/update', [TempatController::class, 'update'])->name('tempat-update');
    Route::post('/tempat/{id}/destroy', [TempatController::class, 'destroy'])->name('tempat-destroy');
});
