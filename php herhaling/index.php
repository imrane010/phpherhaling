<?php
declare(strict_types=1);

require_once  'Movie.php';
require_once  'DiscMovie.php';
require_once  'DownloadMovie.php';
require_once  'watchlist.php';

$piet = new Watchlist();

$movie1 = new DownloadMovie("Avatar", "fantasy", 5, 1500;
//$movie1->setMovie("Avatar", "fantasy", 5);
//$movie1->setFileSize(1500);
$movie1->setQuality("4k");
$movie2 = new DiscMovie("Pirates", "fantasy", 1);
//$movie2->setMovie("Pirates", "fantasy", 1);
$movie2->setWeight(245);


$piet->addMovie($movie1);
$movie2->addMovie($movie2);
$movie2->addMovie($movie1);

//echo $piet->countMovies();
//echo $movie1->getName();

foreach($piet->movies as $movie)
{
    echo $movie->getMovie();
}

$movie1->play();
$movie1->play();

echo $movie1->getName()"<br>";
echo $movie2->getName();
var_dump($piet);
