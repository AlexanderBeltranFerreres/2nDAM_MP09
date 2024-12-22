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
    <h1 class="pelicules-title">Crear Nova Sol·licitud de Regal</h1>
    <form class="form-create-pelicules" action="{{ route('crearRegal') }}" method="POST">
        @csrf
        <div class="form-secc-pelis">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div class="form-secc-pelis">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
        </div>
        <div class="form-secc-pelis">
            <label for="comportament">Comportament:</label>
            <select id="comportament" name="comportament" required>
                <option value="Molt dolent">Molt dolent</option>
                <option value="Dolent">Dolent</option>
                <option value="Regular">Regular</option>
                <option value="Bó">Bó</option>
                <option value="Molt bó">Molt bó</option>
                <option value="Exel·lent">Exel·lent</option>
            </select>
        </div>
        <div class="form-secc-pelis">
            <label for="solicitud">Solicitud:</label>
            <textarea id="solicitud" name="solicitud" rows="5" required></textarea>
        </div>
        <div class="form-secc-pelis">
            <label for="address">Adreça:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-secc-pelis">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('regals.index') }}" class="btn btn-secondary">Cancel·lar</a>
        </div>
    </form>
</div>
<x-footer />
</body>
</html>
