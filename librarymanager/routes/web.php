<?php

use App\Http\Controllers\AuthorBooksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'welcome'])->name('start');
Route::get('/about', [SiteController::class, 'team'])->name('site.team');

Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/author/{author}', [AuthorBooksController::class, 'index'])->name('author.books');

/* Route::get('/books/create', [BookController::class, 'create'])
    ->name('books.create'); */

Route::resource('books', BookController::class);
