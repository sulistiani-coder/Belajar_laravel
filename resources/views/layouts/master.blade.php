<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Website Laravel</h1>
        <nav>
            <a href="/">Home</a> | <a href="/about">Tentang</a>
        </nav>
    </header>
    <header>
        <h1>Website Laravel</h1>
        @include('partials.navbar')
    </header>

    <main>
        @yield('content')   
    </main>
    <footer>
        <p>&copy; 2026 Laravel App.</p>
    </footer>
</body>
    @stack('scripts')
</body>
</html>