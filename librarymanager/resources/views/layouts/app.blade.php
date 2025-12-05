<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'LibraryManager')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="page">
        <header class="page-header">
            <h1 class="page-title">Library-Manager</h1>
            <p class="page-subtitle">Übungen zum Laravel-Grundlagenkurs</p>
            <nav class="page-nav">
                <a href="{{ route('start') }}">Start</a>
                <a href="{{ route('books.index') }}">Bücherliste</a>
                <a href="{{ route('site.team') }}">Über uns</a>
                <a href="{{ route('site.contact') }}">Kontakt</a>
            </nav>
        </header>

        <main>
            <div class="card">
                @yield('content')
            </div>
        </main>
        <footer class="page-footer">
            <small>&copy; {{ date('Y') }} Library-Manager</small>
        </footer>
    </div>
</body>
</html>