<?php
require "Realisateur.php";
require "Film.php";
require "Genre.php";

$tarantino = new Realisateur("Quentin", "Tarantino", "m", "27 march 1963");

// echo $tarantino;
// echo $tarantino->getInfo();

$action = new Genre("Action");

// echo $action;

$killBill = new Film("Kill Bill", "2000", "200", "description of Kill Bill",
                    $tarantino, $action);

// echo $killBill;
// echo $killBill->getInfo();

