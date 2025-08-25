<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Página inicial estilizada
Route::get('/', function () {
    return view('welcome');
});

// Cadastro (1)
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Login (3)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Esqueci a senha -> Editar (4)
Route::get('/edit', [AuthController::class, 'showEdit'])->name('edit');
Route::post('/edit', [AuthController::class, 'edit'])->name('edit.post');

// Estou logado (5)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');