<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="grid-container">
    	<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
	      <div class="grid-x grid-padding-x">
	      	
	        <div class="large-6 cell">
	          <label for="redova">Redova</label>
	          <input type="number" name="redova" id="redova" 
	          value="<?php echo isset($_POST["redova"]) ? $_POST["redova"] : ""; ?>"/>
	          
	          <label for="kolona">Kolona</label>
	          <input type="number" name="kolona" id="kolona" 
	          value="<?php echo isset($_POST["kolona"]) ? $_POST["kolona"] : ""; ?>"/>
	        </div>
	        <div class="large-6 cell">
	          <input type="submit" class="button generiraj" value="GENERIRAJ" />
	        </div>
	      </div>
      </form>
	</div>
	
	
	<div class="grid-container">
      <div class="grid-x grid-padding-x">
      	
        <div class="large-12 cell">
        	
        	Domaća zadaća: 
        	Na osnovu unesenih redova i kolona generirati tablicu u kojoj
        	u doljem desnom uglu se počinje s brojem jedan. Brojevi se uvećani za 1 
        	upisuju u smjeru kazaljke na satu sve do broja redova*kolona.
        	Primjer u JS:https://github.com/tjakopec/OSC3JS
        	
          <?php 
          	$redova=isset($_POST["redova"]) ? $_POST["redova"] : 0;
		  	$kolona=isset($_POST["kolona"]) ? $_POST["kolona"] : 0;
		  	
		  	$redova = $redova>20 ? 20 : $redova;
			$kolona = $kolona>20 ? 20 : $kolona;
          
          	echo "<table class=\"unstriped\">";
			for($i=1;$i<=$redova;$i++){
				echo "<tr>";
				for($j=1;$j<=$kolona;$j++){
					echo "<td>" . ($i*$j) . "</td>";	
				}
				echo "</tr>";
			}
			echo "</table>";
       
          ?>
        </div>
       
      </div>
	</div>
     

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
