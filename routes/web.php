<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/HomeTester', [HomeController::class, 'index'])->name('/HomeTester');

Route::get('/', function(){
    return Inertia::render('Home',['title'=>'Olá Seja Bem vindo!']);
});
