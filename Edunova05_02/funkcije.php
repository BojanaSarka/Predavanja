<?php

//funkcija se zove stavkaIzbornika i prima dva parametra
function stavkaIzbornika($putanja,$opis){
	?>
	<li<?php echo $_SERVER["PHP_SELF"] === $putanja /*prvi parametar*/ ? " class=\"active\"" : "";?>>
		<a href="<?php echo $putanja; /*prvi parametar*/?>"><?php echo $opis; /*drugi parametar*/?></a>
	</li>
	<?php
}

//funckija se zove provjeraOvlasti i ne prima parametra
function provjeraOvlasti(){
	if(!isset($_SESSION[$GLOBALS["appID"]."autoriziran"])){
		header("location: " . $GLOBALS["putanjaAPP"]);
	}
}

function vrijednostGET($kljuc){
	return isset($_GET[$kljuc]) ? $_GET[$kljuc] : "";
}

function oznacenRadio($kljuc,$vrijednost){
	if(!isset($_GET[$kljuc])){
		return "";
	}
	if($_GET[$kljuc]===$vrijednost){
		return " checked=\"checked\" ";
	}
	return "";
}

function oznacenCheckbox($kljuc,$vrijednost){
	if(!isset($_GET[$kljuc])){
		return "";
	}
	foreach ($_GET[$kljuc] as $key => $value) {
		if ($vrijednost===$value){
			return " checked=\"checked\" ";
		}
	}
	return "";
}
