<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramOrangTuaAsuhController;
use App\Http\Controllers\UsersController;
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
    return redirect('home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('home', 'index')->name('home');
    // Route::post('/orders', 'store');
});
Route::controller(ProgramOrangTuaAsuhController::class)->group(function () {
    Route::get('latar-belakang', 'latar_belakang')->name('latar_belakang');
    Route::get('tujuan&sasaran', 'tujuan_sasaran')->name('tujuan_sasaran');
    Route::get('idealisme-program', 'idealisme_program')->name('idealisme_program');
    Route::get('legalitas-program', 'legalitas_program')->name('legalitas_program');
    // Route::post('/orders', 'store');
});
Route::controller(UsersController::class)->group(function () {
    Route::get('user-register', 'user_register')->name('user_register');
    Route::get('calon-anak-asuh', 'calon_anak_asuh')->name('calon_anak_asuh');
    Route::get('json/anak_asuh','dataJson')->name('json.anak_asuh');
});
