@extends('layouts.app')

@section('title', 'Buch anlegen')

@section('content')
    <h1 class="page-title">Neues Buch anlegen</h1>

    @if ($errors->any())
        <div class="callout warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! __($error) !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('books.store') }}" method="post" novalidate>
        @csrf

        <div class="form-row cols-2">
            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <span class="callout warning">{!! __($message) !!}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="author_id">Autor:</label>
                <select name="author_id" id="author_id">

                    <option value="">Bitte wählen</option>

                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}"
                            {{ old('author_id') }}>
                            {{ $author->firstname }} {{ $author->lastname }}
                        </option>
                    @endforeach

                </select>
                @error('author')
                    <span class="callout warning">{!! __($message) !!}</span>
                @enderror
            </div>
        </div>

        <div class="form-row email-age-mat">
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" id="isbn" value="{{ old('isbn') }}">
                @error('isbn')
                    <span class="callout warning">{!! __($message) !!}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="published_year">Erscheinungsjahr:</label>
                <input type="number" name="published_year" id="published_year" value="{{ old('published_year') }}">
                @error('published_year')
                    <span class="callout warning">{!! __($message) !!}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="category">Kategorie:</label>
                <input type="text" name="category" id="category" value="{{ old('category') }}">
                @error('category')
                    <span class="callout warning">{!! __($message) !!}</span>
                @enderror
            </div>

        </div>

        <button type="submit">Speichern</button>
    </form>
@endsection