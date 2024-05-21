<?php
require "Realisateur.php";
require "Film.php";
require "Genre.php";
require "Acteur.php";
require "Role.php";
require "Casting.php";

$tarantino = new Realisateur("Quentin", "Tarantino", "m", "27 march 1963");



$action = new Genre("Action");


$killBill = new Film("Kill Bill", "2003", "111", "A pregnant assassin, code-named The Bride, goes into a coma 
                    for four years after her ex-boss Bill brutally attacks her. 
                    When she wakes up, she sets out to seek revenge on him and his associates.",
                    $tarantino, $action);


$umaThurman = new Acteur("Uma", "Thurman", "f", "29-04-1970");
$davidCarradine = new Acteur("David", "Carradine", "m", "8 december 1936");


$killBill2 = new Film("Kill Bill2", "2008", "120", "description of kill bill 2",
                    $tarantino, $action);


$bride = new Role("Bride"); // $bride = new Role("Bride", $killBill);

$bill = new Role("Bill");  // $bill = new Role("Bill", $killBill);

$cast1 = new Casting($killBill, $bride, $umaThurman);
$cast2 = new Casting($killBill, $bill, $davidCarradine);

echo $killBill->displayCasting();
echo $umaThurman->getFilmographie();
echo $bill->displayActeurs();

