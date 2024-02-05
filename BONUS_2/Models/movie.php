<?php

class Movie
{
    public $title;
    public $genres = [];
    public $releaseYear;

    public function __construct($title, $genres, $releaseYear)
    {
        $this->title = $title;

        if (is_string($genres)) {
            $genres = [$genres];
        }

        $this->genres = $genres;
        $this->releaseYear = $releaseYear;
    }

    public function displayInfo()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Genres: " . implode(", ", $this->genres) . "<br>";
        echo "Release Year: " . $this->releaseYear . "<br>";
        echo "<br>";
    }
}
