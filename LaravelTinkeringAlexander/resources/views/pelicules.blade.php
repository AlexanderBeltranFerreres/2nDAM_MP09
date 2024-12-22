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
    <h1 class="pelicules-title">Gestió de Pel·lícules</h1>

    <div class="pelicules-actions">
        <a href="{{ route('crearPeli') }}" class="btn btn-primary pelicules-create-btn">Crear Nova Pel·lícula</a>
    </div>

    <table class="pelicules-table">
        <thead>
        <tr>
            <th class="pelicules-header">Títol</th>
            <th class="pelicules-header">Any</th>
            <th class="pelicules-header">Gènere</th>
            <th class="pelicules-header">Accions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pelicules as $pelicula)
            <tr>
                <td class="pelicules-cell">{{ $pelicula->Titol }}</td>
                <td class="pelicules-cell">{{ $pelicula->Any }}</td>
                <td class="pelicules-cell">{{ $pelicula->Genere }}</td>
                <td class="pelicules-cell pelicules-actions-cell">
                    <a href="{{ route('editarPeli', ['id' => $pelicula->id]) }}" class="btn btn-secondary">Modificar</a>
                    <a href="{{route('veurePeli', ['id'=> $pelicula->id ]) }}" class="btn btn-info">Veure</a>
                    <form action="/pelicules/{{ $pelicula->id }}" method="POST" class="pelicules-delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<x-footer />
</body>
</html>
