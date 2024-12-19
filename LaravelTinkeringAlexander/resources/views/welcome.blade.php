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
    <body>
        <x-navbar />
            <div class="landing-container">
                <header class="landing-header">
                    <h1 class="landing-title">LaravelTinkering Alexander</h1>
                </header>
                <main class="landing-main-content">
                    <p class="landing-intro">
                        Benvinguts al projecte LaravelTinkering Alexander! Aquest projecte inclou un CRUD completament funcional fet amb Laravel i SQLite, creat per l'autor Alexander Beltran.
                    </p>
                    <div class="button-container">
                        <a  href="{{ route('pelicules.index') }}" class="btn pelicules-btn">Pelicules</a>
                        <a  class="btn altres-btn">Regals</a>
                    </div>
                </main>
            </div>
        <x-footer />
    </body>
</html>
