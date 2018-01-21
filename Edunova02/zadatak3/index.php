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
	<body style="background-color: <?php echo $_GET["boja"] ?>">
		<div class="grid-container">

			<div class="grid-x grid-padding-x">
				<div class="large-4 medium-4 cell">
					<ul class="vertical menu">
						<li>
							<div class="callout">
								<a href="index.php?boja=%23224333">Crvena</a>
							</div>
						</li>
						<li>
							<div class="callout">
								<a href="index.php?boja=blue">Plava</a>
							</div>
						</li>
						<li>
							<div class="callout">
								<a href="index.php?boja=white">Bijela</a>
							</div>
						</li>
						<li>
							<div class="callout">
								<a href="index.php?boja=yellow">Žuta</a>
							</div>
						</li>
						<li>
							<div class="callout">
								<a href="index.php?boja=green">Zelena</a>
							</div>
						</li>
					</ul>
				</div>

				<div class="large-8 medium-8 cell">
<ul class="vertical menu">
  <li><a href="#">One</a></li>
  <li><a href="#">Two</a></li>
  <li><a href="#">Three</a></li>
  <li><a href="#">Four</a></li>
</ul>
				</div>
			</div>
		</div>

		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/what-input.js"></script>
		<script src="js/vendor/foundation.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>
