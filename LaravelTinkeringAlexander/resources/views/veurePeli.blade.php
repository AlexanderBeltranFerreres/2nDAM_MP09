<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informació de la Pel·lícula</title>
    @vite(['resources/css/styles.css'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body class="pelicules-body">
<x-navbar />
<div class="pelicules-container">
    <h1 class="pelicules-title">Informació de la Pel·lícula</h1>
    <div class="info-pelicula">
        <div class="info-item">
            <strong>Títol:</strong>
            <span>{{ $pelicula->Titol }}</span>
        </div>
        <div class="info-item">
            <strong>Any:</strong>
            <span>{{ $pelicula->Any }}</span>
        </div>
        <div class="info-item">
            <strong>Gènere:</strong>
            <span>{{ $pelicula->Genere }}</span>
        </div>
        <div class="info-item">
            <strong>Sinopsis:</strong>
            <p>{{ $pelicula->Sinopsis }}</p>
        </div>
        <div class="info-item">
            <strong>Director:</strong>
            <span>{{ $pelicula->Director }}</span>
        </div>
    </div>
    <div class="actions">
        <a href="{{ route('pelicules.index') }}" class="btn btn-secondary">Tornar</a>
        <a href="{{ route('editarPeli', ['id' => $pelicula->id]) }}" class="btn btn-primary">Editar</a>
    </div>
</div>
<x-footer />
</body>
</html>
