<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorBooksController extends Controller
{
    public function index(Author $author)
    {
        $author->load('books');

        return view('authors.books', compact('author'));
    }
}
