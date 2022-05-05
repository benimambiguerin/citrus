<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Connexion</title>
		<link rel="stylesheet" href="connexionstyle.css" />
	</head>
	<?php
		session_start();
		require 'db.php';
		if(isset($_POST['formconnect']))
		{
			$emailconnect = htmlspecialchars($_POST['emailconnect']);
			$passwordconnect = sha1($_POST['passwordconnect']);
			if(!empty($emailconnect) AND !empty($passwordconnect))
			{
				$requser = $bdd->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
				$requser->execute(array($emailconnect, $passwordconnect));
				$userexist = $requser->rowCount();
				if($userexist == 1)
				{
					$userinfo = $requser->fetch();
					$_SESSION['id'] = $userinfo['id'];
					$_SESSION['email'] = $userinfo['email'];
					header("Location: profil.php?id=".$_SESSION['id']);
				}
				else
				{
					$erreur = "Mail ou mot de passe incorrect";
				}
			}
			else
			{
				$erreur = "Tous les champs doivent être renseignés";
			}
		}
		
		
		
	?>
	<body>
		<?php require 'headerp.php'; ?>
		<div id="login">
			<div class="champs">
				<h1>Connexion</h1>
			<?php
			if(isset($erreur))
			{
				echo '<font color="red">'.$erreur.'</font>';
			}
			?>
					<p>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous !</a></p>
					<form action="" method='post'>
						<div class="form-group">
							<label for="email"></label>
							<input type="email" class="form-control" placeholder="Email" name="emailconnect" >
						</div>
						<div class="form-group">
							<label for="mdp"></label>
							<input type="password" class="form-control" placeholder="Mot de passe" name="passwordconnect" >
						</div>
							<br><a href="connexion.html" >J'ai oublié mon mot de passe </a><br />
							<br /><input type="submit" class="form-control" name="formconnect" value="Se connecter">
					</form>
			</div>
			<div class="image">
			</div>
		</div>
		<?php require 'footer.php'; ?>
		

	</body>
</html>