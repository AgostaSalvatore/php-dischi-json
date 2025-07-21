<?php

// leggere il file dei todo e salviamoli in una variabile
$cd = file_get_contents('./songs.json');

$cds = json_decode($cd, true);

$cds[] = [
    'title'  => $_POST['title'],
    'author' => $_POST['author'],
    'year'   => $_POST['year'],
    'genre'  => $_POST['genre']
];

$cds_updated = json_encode($cds);

file_put_contents('./songs.json', $cds_updated);

header('Location: ./index.php');
?>