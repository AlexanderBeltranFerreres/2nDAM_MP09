<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Drivers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<!-- Header/Navbar -->

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
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">F1 Drivers</h1>
        <a href="/create_f1Driver" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Driver</a>
        <table class="min-w-full mt-4 bg-white border border-gray-300">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Nom</th>
                <th class="py-3 px-6 text-left">Nom de l'Equip</th>
                <th class="py-3 px-6 text-left">Campionats Guanyats</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            <?php if (empty($f1Drivers)): ?>
            <tr>
                <td colspan="7" class="py-3 px-6 text-center">No hi ha pilots disponibles.</td>
            </tr>
            <?php else: ?>
                <?php foreach ($f1Drivers as $driver): ?>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6"><?=$driver['id'] ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($driver['driver_name']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($driver['team_name']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($driver['championships_won']) ?></td>
                <td class="py-3 px-6 text-center">
                    <a href="/edit_f1Driver/<?=$driver['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-3">Edit</a>
                    <a href="/delete_f1Driver/<?=$driver['id'] ?>" class="text-red-500 hover:text-red-700 mr-3">Delete</a>
                    <a href="/info_f1Driver/<?=$driver['id'] ?>" class="text-pink-500 hover:text-red-700">Info</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>
<!-- Footer -->
<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 phpTinkering. Creat per Alexander Beltran Ferreres.</p>
    </div>
</footer>
</body>
</html>
