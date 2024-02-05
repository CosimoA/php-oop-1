<?php

class Movie
{
    // Dichiarazione delle variabili d'istanza
    public $title;
    public $genre;
    public $releaseYear;

    // Costruttore della classe
    public function __construct($title, $genre, $releaseYear)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
    }

    // Metodo della classe
    public function displayInfo()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Genre: " . $this->genre . "<br>";
        echo "Release Year: " . $this->releaseYear . "<br>";
        echo "<br>";
    }
}

// Istanziazione di due oggetti Movie
$movie1 = new Movie("The Dark Knight", "Action", 2008);
$movie2 = new Movie("Inception", "Sci-Fi", 2010);

// Stampare a schermo i valori delle proprietà degli oggetti Movie
echo "Movie 1:<br>";
$movie1->displayInfo();

echo "Movie 2:<br>";
$movie2->displayInfo();
