<pre>
<?php

session_start();
print_r($_SESSION); //varijable povezane s session-om


print_r($_GET); //HTTP parametri putem get metode

print_r($_POST); //HTTP parametri putem post metode

print_r($_REQUEST); //HTTP parametri neovisno o metodi

print_r($_SERVER); //parametri servera

print_r($GLOBALS); //globalne varijable

print_r($_FILES); //primljene datoteke od klijenta

print_r($_COOKIE); //definirani kolačići na klijentu

print_r($_ENV); //varijable okruženja


?>
</pre>
