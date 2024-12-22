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
    <h1 class="pelicules-title">Informació de la Sol·licitud</h1>
    <div class="info-pelicula">
        <div class="info-item">
            <strong>Nom:</strong>
            <span>{{ $regal->nom }}</span>
        </div>
        <div class="info-item">
            <strong>Edad:</strong>
            <span>{{ $regal->edad }}</span>
        </div>
        <div class="info-item">
            <strong>Comportament:</strong>
            <span>{{ $regal->comportament }}</span>
        </div>
        <div class="info-item">
            <strong>Sol·licitud:</strong>
            <p>{{ $regal->solicitud }}</p>
        </div>
        <div class="info-item">
            <strong>Adreça:</strong>
            <span>{{ $regal->address }}</span>
        </div>
    </div>
    <div class="actions">
        <a href="{{ route('regals.index') }}" class="btn btn-secondary">Tornar</a>
        <a href="{{ route('editarRegal', ['id' => $regal->id]) }}" class="btn btn-primary">Editar</a>
    </div>
</div>
<x-footer />
</body>
</html>
