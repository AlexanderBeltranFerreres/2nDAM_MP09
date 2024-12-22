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
    <h1 class="pelicules-title">Modificar Sol·licitud de Regals</h1>
    <form class="form-create-pelicules" action="{{ route('editarRegal', ['id' => $regal->id]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Per especificar que és una modificacip de BD -->
        <div class="form-secc-pelis">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom', $regal->nom) }}" required>
        </div>
        <div class="form-secc-pelis">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" value="{{ old('edad', $regal->edad) }}" required>
        </div>
        <div class="form-secc-pelis">
            <label for="comportament">Comportament:</label>
            <select id="comportament" name="comportament" required>
                <option value="Molt dolent" {{ $regal->comportament == 'Molt dolent' ? 'selected' : '' }}>Molt dolent</option>
                <option value="Dolent" {{ $regal->comportament == 'Dolent' ? 'selected' : '' }}>Dolent</option>
                <option value="Regular" {{ $regal->comportament == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Bó" {{ $regal->comportament == 'Bó' ? 'selected' : '' }}>Bó</option>
                <option value="Molt bó" {{ $regal->comportament == 'Molt bó' ? 'selected' : '' }}>Molt bó</option>
                <option value="Exel·lent" {{ $regal->comportament == 'Exel·lent' ? 'selected' : '' }}>Exel·lent</option>
            </select>
        </div>
        <div class="form-secc-pelis">
            <label for="solicitud">Sol·licitud:</label>
            <textarea id="solicitud" name="solicitud" rows="5" required>{{ old('solicitud', $regal->solicitud) }}</textarea>
        </div>
        <div class="form-secc-pelis">
            <label for="address">Adreça:</label>
            <input type="text" id="address" name="address" value="{{ old('address', $regal->address) }}" required>
        </div>
        <div class="form-secc-pelis">
            <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            <a href="{{ route('regals.index') }}" class="btn btn-secondary">Cancel·lar</a>
        </div>
    </form>
</div>
<x-footer />
</body>
</html>
