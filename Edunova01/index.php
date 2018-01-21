<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php"; ?>
  </head>
  <body>
    <div class="grid-container">

	<?php include_once "zaglavlje.php"; ?>
	<?php include_once "izbornik.php"; ?>
		<pre>
		<?php 
		//tijelo
		print_r($_GET);
		?>
      </pre>
    <?php include_once "podnozje.php"; ?>
    </div>
 	
    <?php include_once "skripte.php"; ?>
  </body>
</html>
