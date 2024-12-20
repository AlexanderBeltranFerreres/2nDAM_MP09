<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaravelTinkering Alexander</title>
    @vite(['resources/css/styles.css'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body class="pelicules-body">
<x-navbar />
<div class="pelicules-container">
    <h1 class="pelicules-title">Crear Nova Pel·lícula</h1>
    <form class="form-create-pelicules" action="{{ route('crearPeli') }}" method="POST">
        @csrf
        <div class="form-secc-pelis">
            <label for="Titol">Títol:</label>
            <input type="text" id="Titol" name="Titol" required>
        </div>
        <div class="form-secc-pelis">
            <label for="Any">Any:</label>
            <input type="number" id="Any" name="Any" required>
        </div>
        <div class="form-secc-pelis">
            <label for="Genere">Gènere:</label>
            <select id="Genere" name="Genere" required>
                <option value="Acció">Acció</option>
                <option value="Comèdia">Comèdia</option>
                <option value="Drama">Drama</option>
                <option value="Terror">Terror</option>
                <option value="Científica">Científica</option>
                <option value="Amor">Amor</option>
            </select>
        </div>
        <div class="form-secc-pelis">
            <label for="Sinopsis">Sinopsis:</label>
            <textarea id="Sinopsis" name="Sinopsis" rows="5" required></textarea>
        </div>
        <div class="form-secc-pelis">
            <label for="Director">Director:</label>
            <input type="text" id="Director" name="Director" required>
        </div>
        <div class="form-secc-pelis">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('pelicules.index') }}" class="btn btn-secondary">Cancel·lar</a>
        </div>
    </form>
</div>
<x-footer />
</body>
</html>
