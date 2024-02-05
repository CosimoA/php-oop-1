<?php

$moviesData = [
    ["The Dark Knight", ["Action", "Drama"], 2008],
    ["Inception", ["Sci-Fi"], 2010],
];

// Creazione degli oggetti Movie dall'array di dati
$movies = [];
foreach ($moviesData as $movieData) {
    $movies[] = new Movie($movieData[0], $movieData[1], $movieData[2]);
}
