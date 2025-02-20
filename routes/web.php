<?php

use App\Http\Controllers\EksportirController;
use App\Http\Controllers\IndexController;
use App\Models\Eksportir;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [IndexController::class, 'index']);

Route::get("/create", [EksportirController::class, 'create']);
Route::post('/eksportirs/store', [EksportirController::class, 'store'])->name('eksportirs.store');
Route::get('/export-csv/{city}', [EksportirController::class, 'exportCsv']);
