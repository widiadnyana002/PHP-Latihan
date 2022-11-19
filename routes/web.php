<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\KalkulatorController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/aritmatika', [PengenalanController::class, 'index']);

Route::get('/kalkulator', [KalkulatorController::class, 'index']);

Route::post('/kalkulator', [KalkulatorController::class, 'kalkulator']);
Route::post('/hasil', [PengenalanController::class, 'hasil']);

// Route::get('/order', [HomeController::class, 'order'])->name('show');

Route::get('/order', function () {
    return view('order');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
