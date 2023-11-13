<?php

use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/makanan/all', [MakananController::class, 'index']);

Route::get('/makanan/detail/{makanan}', [MakananController::class,'show']);

Route::get('/minuman/all', [MinumanController::class, 'index']);

Route::get('/minuman/detail/{minuman}', [MinumanController::class,'show']);
