<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuTamuController;

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
    return view('welcome');
});

Route::get('/home', [BukuTamuController::class, 'index'])->name('home.index');
Route::get('/home/form', [BukuTamuController::class, 'create'])->name('home.create');
Route::post('/home', [BukuTamuController::class, 'store'])->name('home.store');
