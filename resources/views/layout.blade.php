<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Seyahat Sistemi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('oteller.index') }}">Oteller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('seyahatlar') }}">Seyahatler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kampanyalar') }}">Kampanyalar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rezervasyonlar') }}">Rezervasyonlar</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<div class="content">
    @yield('content') <!-- Sayfa içeriği burada yer alacak -->
</div>

<footer>
    © 2025 Rezervasyon Sistemi. Tüm hakları saklıdır.
</footer>

@stack('scripts')
</body>
</html>
