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
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Add New Film</h1>
        <form action="/store" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Title:</label>
                <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter film title">
            </div>

            <div class="mb-4">
                <label for="director" class="block text-sm font-medium text-gray-700">Director:</label>
                <input type="text" name="director" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter director's name">
            </div>

            <div class="mb-4">
                <label for="genre-desplegable" class="block text-sm font-medium text-gray-700">Gènere:</label>
                <div class="relative">
                    <div id="genreDropdown" class="border border-gray-300 rounded-md p-2 w-full cursor-pointer" onclick="toggleDropdown()">
                        <span id="displayGenres" class="text-gray-700">Selecciona els gèneres</span>
                    </div>
                    <div id="dropdownOptions" class="absolute mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg hidden">
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Terror" onchange="updateGenres(this)" class="mr-2"> Terror
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Suspense" onchange="updateGenres(this)" class="mr-2"> Suspense
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Ciència Ficció" onchange="updateGenres(this)" class="mr-2"> Ciència Ficció
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Comèdia" onchange="updateGenres(this)" class="mr-2"> Comèdia
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Drama" onchange="updateGenres(this)" class="mr-2"> Drama
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Acció" onchange="updateGenres(this)" class="mr-2"> Acció
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Aventura" onchange="updateGenres(this)" class="mr-2"> Aventura
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Animació" onchange="updateGenres(this)" class="mr-2"> Animació
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Romàntic" onchange="updateGenres(this)" class="mr-2"> Romàntic
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Documental" onchange="updateGenres(this)" class="mr-2"> Documental
                        </label>
                        <label class="block px-4 py-2 cursor-pointer hover:bg-gray-100">
                            <input type="checkbox" value="Fantasia" onchange="updateGenres(this)" class="mr-2"> Fantasia
                        </label>
                    </div>
                </div>
                <input type="hidden" id="genere" name="genere">
            </div>

            <div class="mb-4">
                <label for="sinopsis" class="block text-sm font-medium text-gray-700">Sinopsi:</label>
                <textarea name="sinopsis" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 h-32" placeholder="Escriu la sinopsi de la pel·lícula aquí..."></textarea>
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Release Year:</label>
                <input type="number" name="year" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter release year">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add Film</button>
        </form>
    </div>
</main>

<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 phpTinkering. Creat per Alexander Beltran Ferreres.</p>
    </div>
</footer>

<!-- Script per a opcions multi seleccionables -->
<script>
    function toggleDropdown() {
        document.getElementById("dropdownOptions").classList.toggle("hidden");
    }

    function updateGenres() {
        // Recull tots els checkboxes seleccionats dins de #dropdownOptions
        const selectedOptions = Array.from(document.querySelectorAll("#dropdownOptions input:checked"))
            .map(checkbox => checkbox.value);

        // Concatena els gèneres seleccionats amb comes
        const concatenatedGenres = selectedOptions.join(", ");

        // Actualitza el text dinàmicament al `displayGenres`
        document.getElementById("displayGenres").textContent = concatenatedGenres || "Selecciona els gèneres";

        // Desa el valor concatenat al camp ocult per enviar-lo amb el formulari
        document.getElementById("genere").value = concatenatedGenres;
    }

    // Tanca el menú si es fa clic fora d'ell
    window.addEventListener("click", function(event) {
        if (!event.target.closest("#genreDropdown") && !event.target.closest("#dropdownOptions")) {
            document.getElementById("dropdownOptions").classList.add("hidden");
        }
    });
</script>

</body>
</html>
