<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){ return redirect('home'); });

Route::get('/home', function(){ return view('home'); })->name('home');

Route::get('/plans', function(){ return view('plans'); })->name('plans');