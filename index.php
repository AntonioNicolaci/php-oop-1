<?php
class Movie {
    public $name;
    public $producer;
    public $prodComp;
    public $filmLength;
    public $director;
    public $actor;
    public $releaseDate;
    public $state;
    public $originalLanguage;
    public $score;

    function __construct(Director $director)
    {
        $this->director = $director;
    }

    function starScore ($score)
    {
        if ($score >= 1 || $score <= 2) {
            return "★☆☆☆☆";
        } elseif ($score >= 3 || $score <= 4) {
            return "★★☆☆☆";
        } elseif ($score >= 5 || $score <= 6) {
            return "★★★☆☆";
        } elseif ($score >= 7 || $score <= 8) {
            return "★★★★☆";
        } elseif ($score >= 9 || $score <= 10) {
            return "★★★★★";
        }
    }
};

class Director {
    public $name;
    public $awards;
    public $listFilm;
    public $firstFeature;
    public $dateBith;
    public $age;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First OOP in php</title>
</head>
<body>
    
</body>
</html>