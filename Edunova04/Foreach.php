<?php

$niz=array(1,2,2,2,2,2);

foreach ($niz as $i) {
	echo $i . "<br />";
}


echo "<hr />";

$niz = array("ime" => "Pero", "godine" => 22);

foreach ($niz as $kljuc => $vrijednost) {
	echo "za ključ " . $kljuc . " postavljena je vrijednost " . $vrijednost . "<br />";
}


//zadatak: ispišite sve ključeve primljene putem GET metode

foreach ($_GET as $key => $value) {
	echo $key . "<br />";
}