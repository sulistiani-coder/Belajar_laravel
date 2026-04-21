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
        @include('partials.navbar')
    </header>

    <main>
        @yield('content')   
    </main>
    @include('partials.footer')
</body>
    @stack('scripts')
</body>
</html>
