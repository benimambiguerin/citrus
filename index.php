<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Citrus</title>
		<link rel="stylesheet" href="connexionstyle.css" />
	</head>
	
	<body>
	<?php
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
			<footer>
				<div id="footer">
					<div class="a_propos">
						<h2>À propos</h2>
							<ul>
								<li><a href="Citrus.html">Notre mission</a></li>
								<li><a href="Citrus.html">Recrutement</a></li>
								<li><a href="Citrus.html">Blog</a></li>
							</ul>
					</div>
					<div class="services">
						<h2>Services</h2>
							<ul>
								<li><a href="connexion.html">Réparation vélo</a></li>
								<li><a href="Citrus.html">Réparation V.A.E</a></li>
								<li><a href="connexion.html">Réparation de trotinette</a></li>
								<li><a href="Citrus.html">Certification technique</a></li>
							</ul>
					</div>
					<div class="liens_utiles">
						<h2>Liens Utiles</h2>
							<ul>
								<li><a href="connexion.html">Questions fréquentes</a></li>
								<li><a href="Citrus.html">Nos prix</a></li>
								<li><a href="connexion.html">Témoignages</a></li>
								<li><a href="Citrus.html">Devenir réparateur</a></li>
							</ul>
					</div>
					<div class="reseaux_sociaux">
							<ul>
								<div class="appli">
								<li class="googleplay"><a href="https://play.google.com/store?hl=fr&gl=fr"><img src="images/googleplay.png" alt="googleplay" /></a></li>
								<li class="appstore"><a href="https://www.apple.com/fr/app-store/"><img src="images/appstore.png" alt="appstore" /></a></li>
								</div>
								<div class="reseaux">
								<a href="https://www.facebook.com/"><li class="fb"></li></a>
								<a href="https://twitter.com/?lang=fr"><li class="twitter"></li></a>
								<a href="https://www.instagram.com/?hl=fr"><li class="insta"></li></a>
								<a href="https://www.youtube.com/?hl=FR"><li class="yt"></li></a>
								</div>
							</ul>
					</div>
				</div>
			</footer>
		</body>
</html>