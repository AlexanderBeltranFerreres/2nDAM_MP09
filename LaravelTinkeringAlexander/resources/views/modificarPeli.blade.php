<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Pel·lícula</title>
    @vite(['resources/css/styles.css'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body class="pelicules-body">
<x-navbar />
<div class="pelicules-container">
    <h1 class="pelicules-title">Modificar Pel·lícula</h1>
    <form class="form-create-pelicules" action="{{ route('modificarPeli', ['id' => $pelicula->id]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Per especificar que és una modificacip de BD -->
        <div class="form-secc-pelis">
            <label for="Titol">Títol:</label>
            <input type="text" id="Titol" name="Titol" value="{{ old('Titol', $pelicula->Titol) }}" required>
        </div>
        <div class="form-secc-pelis">
            <label for="Any">Any:</label>
            <input type="number" id="Any" name="Any" value="{{ old('Any', $pelicula->Any) }}" required>
        </div>
        <div class="form-secc-pelis">
            <label for="Genere">Gènere:</label>
            <select id="Genere" name="Genere" required>
                <option value="Acció" {{ $pelicula->Genere == 'Acció' ? 'selected' : '' }}>Acció</option>
                <option value="Comèdia" {{ $pelicula->Genere == 'Comèdia' ? 'selected' : '' }}>Comèdia</option>
                <option value="Drama" {{ $pelicula->Genere == 'Drama' ? 'selected' : '' }}>Drama</option>
                <option value="Terror" {{ $pelicula->Genere == 'Terror' ? 'selected' : '' }}>Terror</option>
                <option value="Científica" {{ $pelicula->Genere == 'Científica' ? 'selected' : '' }}>Científica</option>
                <option value="Amor" {{ $pelicula->Genere == 'Amor' ? 'selected' : '' }}>Amor</option>
            </select>
        </div>
        <div class="form-secc-pelis">
            <label for="Sinopsis">Sinopsis:</label>
            <textarea id="Sinopsis" name="Sinopsis" rows="5" required>{{ old('Sinopsis', $pelicula->Sinopsis) }}</textarea>
        </div>
        <div class="form-secc-pelis">
            <label for="Director">Director:</label>
            <input type="text" id="Director" name="Director" value="{{ old('Director', $pelicula->Director) }}" required>
        </div>
        <div class="form-secc-pelis">
            <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            <a href="{{ route('pelicules.index') }}" class="btn btn-secondary">Cancel·lar</a>
        </div>
    </form>
</div>
<x-footer />
</body>
</html>
