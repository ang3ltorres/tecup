<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function(){ return redirect('home'); });

Route::get('/home', function(){ return view('home'); })->name('home');

Route::get('/plans', function(){ return view('plans'); })->name('plans');

Route::get('/session', function(){ return view('session'); })->name('session');

Route::get('/homeapp', function(){ return view('homeapp'); })->name('homeapp');
Route::get('/homeapp', [RegisterController::class, 'index'])->name('homeapp');


Route::post('/session', [RegisterController::class, 'register'])->name('session');
Route::post('/iniciar_sesion',[RegisterController::class,'login'])->name('iniciar_sesion');
Route::get('/faq', function(){ return view('faq'); })->name('faq');
