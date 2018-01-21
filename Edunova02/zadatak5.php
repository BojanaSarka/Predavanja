<html>
	<body>
		<form method="post" action="B.php">
			<select name="grad">
				<option value="Zagreb">Glavni grad</option>
				<option>Osijek</option>
				<option value="VK" >VInkovci</option> 
			</select>
			<input type="submit" />
		</form>
		
	</body>
</html>

<?php

// Post metodom pošaljite stranici B jednu odabranu stavku iz select liste s stranice A
// Stranica B ispisuje vrijednost odabrane stavke s stranice A

