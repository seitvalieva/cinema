<?php
require "Realisateur.php";
require "Film.php";

$tarantino = new Realisateur("Quentin", "Tarantino", "m", "27 march 1963");

// echo $tarantino->getInfo();
// echo $tarantino;

$killBill = new Film("Kill Bill", "2000", "200", "description of Kill Bill");

// echo $killBill;