<?php

use App\Http\Controllers\API\ParkirApi;
use App\Http\Controllers\API\TempatApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/masuk_keluar', [ParkirApi::class, 'masuk_keluar']);
Route::post('/masuk', [ParkirApi::class, 'store']);
Route::post('/keluar', [ParkirApi::class, 'update']);

Route::post('/terisi', [TempatApi::class, 'terisi']);
Route::post('/kosong', [TempatApi::class, 'kosong']);
