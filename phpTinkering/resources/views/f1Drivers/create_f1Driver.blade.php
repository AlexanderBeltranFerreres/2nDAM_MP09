<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear F1 Driver</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<<header class="bg-blue-500 text-white p-4">
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
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Afegir Nou F1 Driver</h1>
        <form action="/store_f1Drivers" method="POST">
            <div class="mb-4">
                <label for="driver_name" class="block text-sm font-medium text-gray-700">Nom del Pilot:</label>
                <input type="text" name="driver_name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix el nom del pilot">
            </div>

            <div class="mb-4">
                <label for="team_name" class="block text-sm font-medium text-gray-700">Nom de l'Equip:</label>
                <input type="text" name="team_name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix el nom de l'equip">
            </div>

            <div class="mb-4">
                <label for="nationality" class="block text-sm font-medium text-gray-700">Nacionalitat:</label>
                <input type="text" name="nationality" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix la nacionalitat">
            </div>

            <div class="mb-4">
                <label for="championships_won" class="block text-sm font-medium text-gray-700">Campionats Guanyats:</label>
                <input type="number" name="championships_won" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix el nombre de campionats guanyats">
            </div>

            <div class="mb-4">
                <label for="debut_year" class="block text-sm font-medium text-gray-700">Any de Debut:</label>
                <input type="number" name="debut_year" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix l'any de debut">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Afegir Pilot</button>
        </form>
    </div>
</main>

<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 phpTinkering. Creat per Alexander Beltran Ferreres.</p>
    </div>
</footer>
</body>
</html>
