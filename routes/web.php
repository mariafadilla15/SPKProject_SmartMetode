<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;
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

Route::get('/', function () {
    return view('layouts.app');
});
Route::resource('kriteria', KriteriaController::class);
Route::resource('alternatif', AlternatifController::class);