<?php include_once '../konfiguracija.php'; 
if(!isset($_SESSION["autoriziran"])){
	header("location: " . $putanjaAPP);
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../include/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
    	<?php include_once '../include/zaglavlje.php'; ?>
      	<?php include_once '../include/izbornik.php'; ?>
      	
      	<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				Ovo je nadzorna ploča
				<?php 
			
				print_r($_SESSION);
				?>
			</div>
		</div>
		<?php include_once '../include/podnozje.php'; ?>
		
      
    </div>

    <?php include_once '../include/skripte.php'; ?>
  </body>
</html>
