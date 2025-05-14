<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});

//Rotas de autenticação (Registo)
Route::get('/register', [AuthController::class, 'signup'])->name('register.show');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

//Rotas de autenticação (Login)
Route::get('/login', [AuthController::class, 'signin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');