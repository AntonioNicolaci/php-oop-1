<?php
class Movie {
    public $name;
    public $genre;
    public $producer;
    public $prodComp;
    public $filmLength;
    public $director;
    public $cast;
    public $releaseDate;
    public $state;
    public $originalLanguage;
    public $score;

    function __construct($name, $genre, $producer, $prodComp, $filmLength, Director $director, $cast, $releaseDate, $state, $originalLanguage, $score)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->producer = $producer;
        $this->prodComp = $prodComp;
        $this->filmLength = $filmLength;
        $this->director = $director;
        $this->cast = $cast;
        $this->releaseDate = $releaseDate;
        $this->state = $state;
        $this->originalLanguage = $originalLanguage;
        $this->score = $score;
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
    public $dateBirth;

    function __construct($name, $awards, $listFilm, $firstFeature, $dateBirth)
    {
        $this->name = $name;
        $this->awards = $awards;
        $this->listFilm = $listFilm;
        $this->firstFeature = $firstFeature;
        $this->dateBirth = $dateBirth;
    }
};

$inception = new Movie('Inception', 'Action, Shi-fi', 'Christopher Nolan, Emma Thomas', 'Warner Bros', "148'", new Director('Christopher Nolan', 'Oscar 2002, Oscar 2011, Oscar 2011, Oscar 2018, Oscar 2018', 'Inception, Dunkirk, Memento, Following', 'Following', '1970-07-30'), 'Leonardo DiCaprio, Tom Hary, Elliot Page','2010','UK, USA','EN','8');
$porcoRosso = new Movie('Porco Rosso', 'fantastico, Avventura', 'Toshio Suzuki', 'Studio Ghibli', "92'", new Director ('Hayao Miyazaki', 'Oscar Onorario', 'Lupin III - Il Castello di Cagliostro, Porco Rosso, Il Castello Errabte di Howl', 'La Storia dei Quattro Ronin', '1941-01-05'), 'Shuichiro Moriyama, Tokiko Kato', '1992', 'GP', 'JP', '9');
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First OOP in php</title>
</head>
<body>
    <h2>Primo film:</h2>
    <?php
    var_dump($inception);
    ?>
    <h2>Secondo film:</h2>
    <?php
    var_dump($porcoRosso);
    ?>
</body>
</html>