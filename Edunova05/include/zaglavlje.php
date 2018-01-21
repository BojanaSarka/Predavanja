<div class="grid-x grid-padding-x">
	<div class="large-2 cell">
	  logo
	</div>
	<div class="large-8 cell">
	  <h1><?php echo $naslovAPP; ?></h1>
	</div>
	<div class="large-2 cell">
		<?php if(!isset($_SESSION["autoriziran"])): ?>
	  		<a href="<?php echo $putanjaAPP; ?>login.php" class="button">Prijava</a>
	  	<?php else: ?>
	  		<a href="<?php echo $putanjaAPP; ?>logout.php" class="button">Odjava</a>
	  	<?php endif;?>
	</div>
</div>