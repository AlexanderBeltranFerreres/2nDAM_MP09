<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
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
    <h1 class="text-3xl font-bold mb-4">Delete Film</h1>
    <p>Vols eliminar la peli "<?= htmlspecialchars($film->name) ?>"?</p>
    <form action="/destroy" method="POST" class="mt-4">
        <input type="hidden" name="id" value="<?= $film->id ?>">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
    </form>
    <a href="/films" class="text-gray-500 hover:underline mt-4 block">Cancel</a>
</main>
<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 phpTinkering. Creat per Alexander Beltran Ferreres.</p>
    </div>
</footer>
</body>
</html>