<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: [HomeController::class, 'index'])->name('/');
Route::get('/login', action: [LoginController::class, 'index'])->name('/Login');
