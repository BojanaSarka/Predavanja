<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title"><?php echo $naslovAPP; ?></div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li<?php
		if ($_SERVER["PHP_SELF"] === $putanjaAPP . "index.php") {
			echo " class=\"active\"";
		}
      ?>>
	      <a href="<?php echo $putanjaAPP; ?>index.php">
	      	<?php echo $naslovAPP; ?>
	      </a>	
      	</li>
      <li<?php
			if ($_SERVER["PHP_SELF"] === $putanjaAPP . "onama.php") {
				echo " class=\"active\"";
			}
      ?>><a href="<?php echo $putanjaAPP; ?>onama.php">O nama</a></li>
      <li<?php
		if ($_SERVER["PHP_SELF"] === $putanjaAPP . "kontakt.php") {
			echo " class=\"active\"";
		}
      ?>><a href="<?php echo $putanjaAPP; ?>kontakt.php">Kontakt</a></li>
    </ul>
  </div>
</div>