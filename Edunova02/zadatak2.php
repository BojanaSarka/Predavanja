

<html>
	<body style="background-color: <?php echo $_GET["boja"] ?>">
		
		<form method="get">
			<input type="color" name="boja" value="<?php echo $_GET["boja"] ?>" />
			<input type="submit" value="Promjeni boju" />
		</form>

		</body>
</html>


<?php


//kreirajte formu koja od korisnika unosi boju. 
//Nakon klika na gumb Promjenio boju boja pozadine se promjeni na postavljenu bolju