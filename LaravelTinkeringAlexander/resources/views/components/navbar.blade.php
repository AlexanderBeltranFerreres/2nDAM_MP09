<head>
    @vite ('resources/css/styles.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<nav class="navbar">
    <div class="container">
        <h1 class="navbar-title">LaravelTinkering Alexander</h1>
        <ul class="navbar-links">
            <li><a href="/" class="link">Home</a></li>
            <li><a  href="{{ route('pelicules.index') }}" class="link">Pelicules</a></li>
            <li><a  href="{{ route('regals.index') }}" class="link">Regals</a></li>
        </ul>
    </div>
</nav>

