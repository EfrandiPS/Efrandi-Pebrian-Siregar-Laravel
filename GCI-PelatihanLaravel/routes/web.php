<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/datatable', function () {
    return view('datatable');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/welcome', [AuthController::class, 'showWelcomePage']);
