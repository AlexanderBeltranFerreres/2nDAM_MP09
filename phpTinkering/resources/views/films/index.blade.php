<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina Principal del Projecte</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

<!-- Header/Navbar -->
<header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Nom del Projecte</h1>
        <nav>
            <a href="/" class="px-4 py-2 hover:bg-blue-700 rounded">Inici</a>
            <a href="/films" class="px-4 py-2 hover:bg-blue-700 rounded">Pel·lícules</a>
            <a href="/others" class="px-4 py-2 hover:bg-blue-700 rounded">Altres</a>
        </nav>
    </div>
</header>

<!-- Contingut Principal -->
<main class="flex-grow container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg p-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Benvingut al Nostre Projecte</h2>
        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
        <div>
            <a href="/films" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mr-4">Anar a Pel·lícules</a>
            <a href="/others" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Anar a Altres</a>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 Nom del Projecte. Creat per Alexander Beltran Ferreres.</p>
    </div>
</footer>

</body>
</html>