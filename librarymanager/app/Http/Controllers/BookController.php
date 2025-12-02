<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('published_year')->get();
        return view('books.index', [
            'books' => $books,
        ]);
    }
}
