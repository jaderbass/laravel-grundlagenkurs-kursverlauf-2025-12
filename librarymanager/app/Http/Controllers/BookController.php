<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
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

    public function create()
    {
        return view('books.create');
    }

    public function store(StoreBookRequest $request)
    {
        Book::create($request->validated());
        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        // 
    }

    public function edit(Book $book)
    {
        // 
    }

    public function update(Book $book)
    {
        // 
    }

    public function destroy(Book $book)
    {
        // 
    }
}
