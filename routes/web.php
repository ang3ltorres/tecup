<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){ return redirect('home'); });

Route::get('/home', function(){ return view('home'); })->name('home');

Route::get('/plans', function(){ return view('plans'); })->name('plans');

Route::get('/session', function(){ return view('session'); })->name('session');

Route::get('/faq', function(){ return view('faq'); })->name('faq');
