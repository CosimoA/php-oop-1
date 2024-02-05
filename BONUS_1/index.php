<?php

class Movie
{
    // Dichiarazione delle variabili d'istanza
    public $title;
    public $genres = [];
    public $releaseYear;

    // Costruttore della classe
    public function __construct($title, $genres, $releaseYear)
    {
        $this->title = $title;

        // Se $genres è una stringa, lo converte in un array contenente quella stringa
        if (is_string($genres)) {
            $genres = [$genres];
        }

        $this->genres = $genres;
        $this->releaseYear = $releaseYear;
    }

    // Metodo della classe
    public function displayInfo()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Genres: " . implode(", ", $this->genres) . "<br>";
        echo "Release Year: " . $this->releaseYear . "<br>";
        echo "<br>";
    }
}

// Istanziazione di due oggetti Movie con più di un genere
$movie1 = new Movie("The Dark Knight", ["Action", "Drama"], 2008);
$movie2 = new Movie("Inception", "Sci-Fi", 2010); // Accetta anche un singolo genere come stringa

// Stampare a schermo i valori delle proprietà degli oggetti Movie
echo "Movie 1:<br>";
$movie1->displayInfo();

echo "Movie 2:<br>";
$movie2->displayInfo();
