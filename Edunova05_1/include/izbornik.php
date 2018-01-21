<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title"><?php echo $naslovAPP; ?></div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
    	
      <?php 
      //poziv funkcije koja je definirana u /Edunova05/funkcije.php:4
      stavkaIzbornika($putanjaAPP."index.php", $naslovAPP); ?>
      
      <?php if(isset($_SESSION[$appID."autoriziran"])): ?>	
      	<?php stavkaIzbornika($putanjaAPP . "privatno/nadzornaPloca.php", "Nadzorna ploča"); ?>
		<li>
			<a href="#">Programi</a>
			<ul class="menu vertical">
				<?php 
				stavkaIzbornika($putanjaAPP . "privatno/smjerovi/index.php", "Smjerovi"); 
				stavkaIzbornika($putanjaAPP . "privatno/grupe/index.php", "Grupe"); 
				stavkaIzbornika($putanjaAPP . "privatno/polaznici/index.php", "Polaznici"); 
				stavkaIzbornika($putanjaAPP . "privatno/predavaci/index.php", "Predavači"); 
				?>
			</ul>
		</li>
      <?php endif;?>
      
      <?php stavkaIzbornika($putanjaAPP."onama.php", "O nama"); ?>
      <?php stavkaIzbornika($putanjaAPP."kontakt.php", "Kontakt"); ?>
      
    </ul>
  </div>
</div>