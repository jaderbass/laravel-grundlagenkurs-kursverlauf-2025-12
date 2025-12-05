@extends('layouts.app')

@section('title', 'Buch: {{ $book->title }}')

@section('content')

<h1>{{ $book->title }}</h1>

@include('partials.errors')

{{-- @php
    dd($authors);
@endphp --}}

  <ul>
    <li>Autor: <a href="{{ route('author.books', $book->author_id) }}">{{ $book->author->firstname }} {{ $book->author->lastname }}</a></li>
    <li>ISBN: {{ $book->isbn }}</li>
    <li>Erscheinungsjahr: {{ $book->published_year }}</li>
    <li>Kategorie: {{ $book->category }}</li>
  </ul>

  <p>
    <a href="{{ route('books.index') }}">Zurück zur Liste</a>
    <a href="{{ route('books.edit', $book) }}">Bearbeiten</a>
  </p>

@endsection
