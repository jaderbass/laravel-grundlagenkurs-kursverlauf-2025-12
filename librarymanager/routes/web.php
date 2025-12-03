<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('books')->name('start');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');

/* Route::get('/books/create', [BookController::class, 'create'])
    ->name('books.create'); */

Route::resource('books', BookController::class);
