<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informació de la Pel·lícula</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Gestor Informació</h1>
        <nav>
            <a href="/" class="px-4 py-2 hover:bg-blue-700 rounded">Inici</a>
            <a href="/films" class="px-4 py-2 hover:bg-blue-700 rounded">Pel·lícules</a>
            <a href="/f1Drivers" class="px-4 py-2 hover:bg-blue-700 rounded">F1 Drivers</a>
        </nav>
    </div>
</header>
<main class="flex-grow container mx-auto p-6">
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <!-- Títol principal -->
        <h1 class="text-4xl font-bold mb-4 text-center">Informació de la Pel·lícula</h1>

        <!-- Dades de la pel·lícula -->
        <div class="mt-4 text-center">
            <h2 class="text-2xl font-semibold text-gray-800 mb-2"><?= htmlspecialchars($film->name) ?></h2>
            <p class="text-gray-500 italic mb-6">Dirigit per: <?= htmlspecialchars($film->director) ?></p>

            <!-- Any i Gènere -->
            <div class="flex justify-center space-x-4 mb-4">
                <p class="bg-gray-100 px-4 py-2 rounded text-gray-700"><strong>Any:</strong> <?= htmlspecialchars($film->year) ?></p>
                <p class="bg-gray-100 px-4 py-2 rounded text-gray-700"><strong>Gènere:</strong> <?= htmlspecialchars($film->genere) ?></p>
            </div>

            <!-- Descripció de la pel·lícula -->
            <div class="bg-gray-50 p-4 rounded-md text-gray-700">
                <p class="text-lg"><?= nl2br(htmlspecialchars($film->sinopsis)) ?></p>
            </div>
        </div>
    </div>
</main>
<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 phpTinkering. Creat per Alexander Beltran Ferreres.</p>
    </div>
</footer>
</body>
</html>