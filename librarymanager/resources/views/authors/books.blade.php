@extends('layouts.app')

@section('title', 'Bücher eines Autors')

@section('content')
  <h1 class="page-title">Bücher von {{ $author->firstname }} {{ $author->lastname }}</h1>

  <ul>
    @forelse ($author->books as $book)
      <li>{{ $book->title }}</li>
    @empty
      <p>Noch keine Bücher vorhanden.</p>
    @endforelse
  </ul>
@endsection