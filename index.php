<?php
require "Realisateur.php";
require "Film.php";
require "Genre.php";
require "Acteur.php";

$tarantino = new Realisateur("Quentin", "Tarantino", "m", "27 march 1963");

// echo $tarantino;
// echo $tarantino->getInfo();

$action = new Genre("Action");

// echo $action;

$killBill = new Film("Kill Bill", "2003", "111", "A pregnant assassin, code-named The Bride, goes into a coma 
                    for four years after her ex-boss Bill brutally attacks her. 
                    When she wakes up, she sets out to seek revenge on him and his associates.",
                    $tarantino, $action);

// echo $killBill;
// echo $killBill->getInfo();
// var_dump($killBill);

// $umaThurman = new Acteur("Uma", "Thurman", "f", "29 april 1970");

// echo $umaThurman;

var_dump($tarantino);
