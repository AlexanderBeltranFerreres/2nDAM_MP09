<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
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