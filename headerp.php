<?php
		require 'db.php';
		
		if (isset($_GET['id']) AND $_GET['id'] > 0)
		{
			$getid = intval($_GET['id']);
			$requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
			$requser->execute(array($getid));
			$userinfo = $requser->fetch();
		}
		
		if(isset($_SESSION['id'])){
			$idUser=$_SESSION['id'];
			$linkprofil="editionprofil.php?id=$idUser";
			
		
			$getid = $idUser;
			$requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
			$requser->execute(array($getid));
			$userinfo = $requser->fetch();
		?>
		<header>
			<div id="tete_de_page">
				<div class="logo">
					<p><a href="index.php"><img src="images/citruslogo2.png" alt="logo citrus" />Citrus</a></p>
				</div>
				<nav>
					<ul class="menu">
						<li><a href="#">Accueil</a></li>
						<li><a href="#">À propos</a></li>
						<li><a href="#">Tarifs</a></li>
						<li><a href="#">Infos et contact</a></li>
						<li><a href="devenirreparateur.php">Devenir réparateur</a></li>
						<a href="<?php echo $linkprofil; ?>" ><li class="nom_menu"><?php echo $userinfo['prenom']; ?></li></a>
						<li><a href="deconnexion.php">Déconnexion</a></li>
					</ul>
				</nav>
			</div>
</header>
<?php
		}
		else
		{
			require 'header.php';
		}
?>