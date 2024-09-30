<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo PHP</title>
</head>
<body>
<h1>
    <?php
    $greeting = "Hola";
    echo $greeting . "World!<br>";
    $a =3;
    $b = 2;
    echo $a + $b . "<br>";
    //                $films= [
    //                        "Dune",
    //                    "Star wars",
    //                    "Blade Runner 2049",
    //                    "Mad Max: Fury road",
    //                    "Avatar",
    //                    "Club de los poetas muertos"
    //                ];
    $films = [
        [
            "name" => "Dune",
            "director" => "Denis Villeneuve",
            "year" => "2020",
        ], [
            "name" => "Star Wars",
            "director" => "George Lucas",
            "year" => "1977",
        ], [
            "name" => "Blade Runner 2049",
            "director" => "Denis Villeneuve",
            "year" => "2017",
        ], [
            "name" => "Mad Max: Fury road",
            "director" => "George Miller",
            "year" => "2015",
        ], [
            "name" => "Avatar",
            "director" => "James Cameron",
            "year" => "2009",
        ], [
            "name" => "2001: a space odyssey",
            "director" => "Stanley Kubrick",
            "year" => "1968",
        ]];
    var_dump($films);

    function filtreByDirector($films, $director){
        $filtreDirector = [];
        foreach ($films as $film) {
            if ($film["director"] === $director) {
                $filtreDirector[] = $film;
            }
        }
        return $filtreDirector;
    }
    //funcio buscar a partir del 2000
    function filtreAny($films, $any){
        $filtreAny = [];
        foreach ($films as $film) {
            if ($film["year"] >= $any) {
                $filtreAny[] = $film;
            }
        }
        return $filtreAny;
    } m


    ?>
</h1>
<ul>
    <h2>TOTES LES PELICULES</h2>
    <?php foreach ($films as $film) : ?>
        <li><?= $film['name'] ?> (<?= $film['year'] ?> by <?= $film['director'] ?>)</li>
    <?php endforeach; ?>

    <h2>PELICULES FILTRADES PER FUNCIO</h2>
    <?php foreach (filtreByDirector($films, "Denis Villenueve") as $film ): ?>
        <li><?= $film['name'] ?> (<?= $film['year'] ?> by <?= $film['director'] ?>)</li>
    <?php endforeach; ?>

    <h2>PELICULES FILTRADES A PARTIR DEL 2000</h2>
    <?php foreach (filtreAny($films, "2000") as $film ): ?>
        <li><?= $film['name'] ?> (<?= $film['year'] ?> by <?= $film['director'] ?>)</li>
    <?php endforeach; ?>
</ul>
<p>Agafem la peli 3: <?= $films[2]['name'] ?></p>
</body>
</html>