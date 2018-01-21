<?php

if(isset($_GET["b"])){
	echo $_GET["b"];
}else{
	echo "Pošalji GET parametar b";
}

if(is_numeric($_GET["b"])){
	echo "broj je";
}

//pogledati ostale is_ funkcije