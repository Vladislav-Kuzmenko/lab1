<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Довідник')</title>
    <!-- Підключення Bootstrap 5 через CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<!-- Навігаційна панель (Navbar) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('clubs.index') }}">⚽ УПЛ Довідник</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('country.index') }}">Країни</a>
            <a class="nav-link active" href="{{ route('clubs.index') }}">Футбольні клуби</a>
        </div>
    </div>
</nav>

<!-- Основний контент -->
<div class="container bg-white p-4 rounded shadow-sm">
    <!-- Flash-повідомлення -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
