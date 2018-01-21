<?php


//koristeći strukturu niza opišite jedan smjer

$smjer = array(
		"sifra" 	=> 1,
		"naziv"		=> "PHP programiranje",
		"cijena"	=> 4999.99,
		"upisnina"	=> 0
);


//ispisati cijenu
echo $smjer["cijena"];


$smjer = array(
		"sifra" 	=> 1,
		"naziv"		=> "PHP programiranje",
		"cijena"	=> 4999.99,
		"upisnina"	=> 0,
		"grupe" => array(
			array(
					"sifra" => 1,
					"naziv" => "PHP",
						),
			array(
					"sifra" => 2,
					"naziv" => "JAVA",
						)
		)
);

//ispisati java

echo $smjer["grupe"][1]["naziv"];
