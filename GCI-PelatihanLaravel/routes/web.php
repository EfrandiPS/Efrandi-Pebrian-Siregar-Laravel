<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

    Route::get('/', function () {
        return view('table');
    });
Route::get('/table', function () {
    return view('table');
});
Route::get('/datatable', function () {
    return view('datatable');
});
Route::get('/form', function () {
    return view('casts.form');
});
// Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/welcome', [AuthController::class, 'showWelcomePage']);
Route::get('/cast', [CastController::class, 'index'])->name('index');
Route::get('/casts', [CastController::class, 'index'])->name('casts.index');  
Route::get('/casts/create', [CastController::class, 'create'])->name('casts.create');
Route::post('/cast', [CastController::class, 'store'])->name('casts.store');
Route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('casts.edit');
Route::get('/casts/{cast_id}/edit', [CastController::class, 'edit'])->name('casts.edit');
Route::put('/casts/{cast_id}', [CastController::class, 'update'])->name('casts.update');
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy'])->name('casts.destroy');


