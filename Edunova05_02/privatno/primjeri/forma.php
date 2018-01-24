<?php include_once '../../konfiguracija.php'; 
provjeraOvlasti();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../include/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
    	<?php include_once '../../include/zaglavlje.php'; ?>
      	<?php include_once '../../include/izbornik.php'; ?>
      	
      	<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<form method="post" enctype="multipart/form-data">
					<input type="text" name="tekst" 
					value="<?php echo vrijednostGET("tekst"); ?>" />
					
					<label for="musko">Muško</label>
					<input <?php echo oznacenRadio("spol", "1") ?> type="radio" name="spol" value="1" id="musko" />
					<br />
					<label for="zensko">Žensko</label>
					<input <?php echo oznacenRadio("spol", "0") ?> type="radio" name="spol" value="0" id="zensko" />
					<hr />
					
					<label for="kat1">Cipele</label>
					<input type="checkbox" id="kat1" value="kat1" 
						name="kat[]" <?php echo oznacenCheckbox("kat","kat1") ?> />
					<br />
					<label for="kat2">Jakne</label>
					<input type="checkbox" id="kat2" value="kat2" 
						name="kat[]" <?php echo oznacenCheckbox("kat","kat2") ?> />
				
					<hr />
					<label for="grad">Grad</label>
					<select id="grad" name="grad">
						<option style="color: gray;" <?php echo isset($_GET["grad"]) && $_GET["grad"]==="0" ? " selected=\"selected\" " : "" ?> value="0">Odaberi grad</option>
						<option <?php echo isset($_GET["grad"]) && $_GET["grad"]==="1" ? " selected=\"selected\" " : "" ?> value="1">Zagreb</option>
						<option <?php echo isset($_GET["grad"]) && $_GET["grad"]==="2" ? " selected=\"selected\" " : "" ?> value="2">Osijek</option>
					</select>
					
					<input type="file" name="datoteka"/>
					<?php print_r($_FILES) ?>
					<hr />
					<input type="submit" value="Izvedi" class="button" />
				</form>
			</div>
		</div>
		<?php include_once '../../include/podnozje.php'; ?>
		
      
    </div>

    <?php include_once '../../include/skripte.php'; ?>
  </body>
</html>
