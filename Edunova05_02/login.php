<?php include_once 'konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'include/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
    	<?php include_once 'include/zaglavlje.php'; ?>
      	<?php include_once 'include/izbornik.php'; ?>
      	
      	<div class="grid-x grid-padding-x">
			<div class="large-4 large-offset-4 cell centered">
				<form class="log-in-form" action="autoriziraj.php" method="post">
				  <h4 class="text-center">Unesite Vaše podatke</h4>
				  <label>Email
				    <input type="email" name="email" placeholder="mario@edunova.hr"
				    value="<?php if(isset($_GET["email"])){
				    	echo $_GET["email"];
				    }else{
				    	if($dev){
				    		echo "mario@edunova.hr";
				    	}
				    }
					
					
					 ?>">
				  </label>
				  <label>Lozinka
				    <input type="password" name="lozinka" placeholder="Lozinka"
				    value="<?php echo $dev ? "e" : ""; ?>">
				  </label>
				  <p><input type="submit" class="button expanded" value="Prijava"></input></p>
				  <?php if(isset($_GET["neuspjelo"])){
				  	echo "Neispravna kombinacija email/lozinka";
				  } ?>
				</form>

			</div>
		</div>
		<?php include_once 'include/podnozje.php'; ?>
		
      
    </div>

    <?php include_once 'include/skripte.php'; ?>
  </body>
</html>
