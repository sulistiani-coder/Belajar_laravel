<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .container { display: flex; height: 100vh; }
        .sidebar { width: 200px; background: #333; color: #fff; padding: 20px; }
        .sidebar a { display: block; color: #fff; text-decoration: none; margin: 10px 0; }
        .sidebar a:hover { text-decoration: underline; }
        .content { flex: 1; padding: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h3>Dashboard</h3>
            <a href="/dashboard/profile">Profile</a>
            <a href="/">Home</a>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    @stack('scripts')
</body>
</html>
