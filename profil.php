<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Citrus</title>
		<link rel="stylesheet" href="profilstyle.css" />
	</head>
	
	<body>
		
		<?php
		session_start();
		require 'db.php';
		require 'headerp.php';
		?>
			<div class="accueil">
				<div class="text">
					<p><span class="acc">Acc</span>ueil<p>
				</div>
			</div>
			<div id="accueil">
				<div class="localisation">
					<div class="texteaccueil"><p>On répare vos vélos et trottinettes chez vous, au bureau, partout.</p></div>
					<form method="post" action="" name="loca">
					<p><input type="text" id="localisation" name="localisation" placeholder="Où souhaitez-vous vous faire réparer ?" size="35" maxlength="30" required /><input type="submit" value="Voir les disponibilités" /></p>
					</form>
				</div>
			</div>

		<?php require 'footer.php'; ?>
	</body>
</html>
