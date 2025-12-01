<?php
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', fn() => 'Dashboard')->name('dashboard');
Route::get('/go', fn() => redirect()->route('dashboard'));
