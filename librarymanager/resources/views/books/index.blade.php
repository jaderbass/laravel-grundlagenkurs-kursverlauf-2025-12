@extends('layouts.app')

@section('title', 'Bücherliste')

@section('content')
    <h2>Bücherliste</h2>

    <p><a href="{{ route('books.create') }}">Neues Buch anlegen</a></p>

    @if($books->isEmpty())
        <p>Es sind noch keine Bücher vorhanden.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Titel</th>
                    <th>Autor</th>
                    <th>Kategorie</th>
                    <th>Aktion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $b)
                    <tr>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->author }}</td>
                        <td>{{ $b->category }}</td>
                        <td>
                            <p>
                                <a href="/books/{{ $b->id }}" class="btn btn-primary">Anzeigen</a>
                                <a href="/books/{{ $b->id }}/edit" class="btn btn-primary">Bearbeiten</a>
                            </p>
                            <form action="/books/{{ $b->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Löschen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection