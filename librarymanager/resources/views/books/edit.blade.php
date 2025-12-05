@extends('layouts.app')

@section('title', 'Buch bearbeiten')

@section('content')

    <h1 class="page-title">Buch bearbeiten</h1>

    @include('partials.errors')

    <form action="{{ route('books.update', $book) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-row cols-2">
            <div class="form-group">
                <label for="title">Buchtitel:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}">
            </div>

            <div class="form-group">
                <label for="author_id">Autor:</label>
                <select name="author_id" id="author_id">

                    <option value="">Bitte wählen</option>

                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}"
                            {{ old('author_id', $author->id) == $book->author_id ? 'selected' : '' }}>
                            {{ $author->firstname }} {{ $author->lastname }}
                        </option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="form-row email-age-mat">
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $book->isbn) }}">
            </div>

            <div class="form-group">
                <label for="published_year">Erscheinungsjahr:</label>
                <input type="number" min="1900" max="{{ date('Y') }}" name="published_year" id="published_year"
                    value="{{ old('published_year', $book->published_year) }}">
            </div>

            <div class="form-group">
                <label for="title">Kategorie:</label>
                <input type="text" name="category" id="category" value="{{ old('category', $book->category) }}">
            </div>
        </div>

        <button type="submit">Aktualisieren</button>

    </form>

@endsection
