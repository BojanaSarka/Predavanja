<?php

if(!isset($_POST["email"]) || !isset($_POST["lozinka"])){
	exit;
}
//ovdje će doći spajanje na bazu
if($_POST["email"]==="mario@edunova.hr" && $_POST["lozinka"]==="e"){
	include_once 'konfiguracija.php';
	$_SESSION[$appID."autoriziran"]="Edunova Zaposlenik";
	header("location: privatno/nadzornaPloca.php");
}else{
	header("location: login.php?neuspjelo&email=" . $_POST["email"]);
}
