<?php
require_once './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Dischi PHP</title>
</head>
<body>
    <h1>
        Dischi PHP
    </h1>

    <div class="container">
        <?php
        foreach ($cds as $song) {
            ?>
        <div class="card border-dark mb-3">
            <div class="card-title p-3">
                <?php
                echo $song['title'];
                ?>
            </div>
            <div class="card-body">
                <?php
                echo $song['author'] . '<br>';
                echo $song['year'] . '<br>';
                echo $song['genre'] . '<br>';
                ?>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <div class="container mt-3">
        <form action="./server.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Autore</label>
                <input type="text" class="form-control" name="author" id="author">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Anno</label>
                <input type="number" class="form-control" name="year" id="year">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genere</label>
                <input type="text" class="form-control" name="genre" id="genre">
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
</body>
</html>