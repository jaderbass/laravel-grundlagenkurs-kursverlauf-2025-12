<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author'])->orderBy('published_year')->get();
        return view('books.index', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        $authors = Author::orderBy('lastname')->get();
        return view('books.create', [
            'authors' => $authors,
        ]);
    }

    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->validated());

        // $book->author()->sync($request->select('author_id'));

        return redirect()
            ->route('books.index')
            ->with('success', 'Buch wurde angelegt');
        }

    public function show(Book $book)
    {
        $authors = Author::orderBy('lastname')->get();

        // dd([$book, $authors]);
        return view('books.show', [
            'book' => $book,
            'authors' => $authors,
        ]);
    }

    public function edit(Book $book)
    {
        $authors = Author::orderBy('lastname')->get();
        return view('books.edit', [
            'book' => $book,
            'authors' => $authors,
        ]); 
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title'=>'required|min:3',
            'author_id'=>'required',
            'isbn'=>'required|size:13',
            'published_year'=>'nullable|integer',
            'category'=>'nullable|string'
        ]);

        $book->update($data);

        return redirect()->route('books.index')
            ->with('success','Buch wurde aktualisiert.'); 
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Das Buch wurde gelöscht');
    }
}
