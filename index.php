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
</body>
</html>