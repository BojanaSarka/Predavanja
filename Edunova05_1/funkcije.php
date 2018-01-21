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
