<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Inscription | Citrus</title>
		<link rel="stylesheet" href="inscriptionstyle.css" />
	</head>
	<?php
		
		require 'db.php';
		if(isset($_POST['signinform']))
		{
			$nom = htmlspecialchars($_POST['nom']);
				$prenom = htmlspecialchars($_POST['prenom']);
				$email = htmlspecialchars($_POST['email']);
				$password = sha1($_POST['password']);
				$tel = htmlspecialchars($_POST['tel']);
				
			if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND  !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['tel']))
			{
				
				
				$nomlength = strlen($nom);
				$prenomlengh = strlen ($prenom);
				$emaillengh = strlen ($email);
				
				if($nomlength <=50)
				{
					if($prenomlengh <=50)
					{
						if($emaillengh <=100)
						{
							if(filter_var($email, FILTER_VALIDATE_EMAIL))
							{
								$reqmail = $bdd->prepare("SELECT * FROM user WHERE email = ?");
								$reqmail->execute(array($email));
								$emailexist = $reqmail->rowCount ();
								if($emailexist == 0)
								{
								$insertmbr = $bdd->prepare("INSERT INTO user(nom, prenom, email, password, tel, cp, ville, adresse) VALUES (?,?,?,?,?,?,?,?)");
								$insertmbr->execute(array($nom, $prenom, $email, $password, $tel, $cp, $ville, $adresse));
								$erreur = "Votre compte a bien été crée";
								header('Location:index.php');
								var_dump($insertmbr->errorInfo());
								}
								else
								{
									$erreur = "Cet email est déja utilisé";
								}
							}
							else
							{
								$erreur = "Votre email n'est pas valide";
							}
						}
						else
						{
							$erreur = "Votre email ne doit pas dépasser les 100 caractères";
						}
					}
					else
					{
						$erreur = "Votre prenom ne doit pas dépasser 100 caractères";
					}
				}
				else
				{
					$erreur = "Votre nom ne doit pas dépasser 100 caractères";
				}
				
			}
			else
			{
				$erreur = "Tous les champs doivent être complétés";
			}
				
		}
	?>
	<body>
		<?php require 'headerp.php'; ?>
		<div id="signin">
			<div class="section_gauche">
			  <h1>Bienvenue chez Citrus !</h1>
			  	  <?php
			if(isset($erreur))
			{
				echo '<font color="red">'.$erreur.'</font>';
			}
			?>
			  <p>Vous avez déja un compte ? <a href="connexion.php">Connectez-vous !</a></p>
			  <form action="" method='post'>
				  <div class="nom_prenom">
				  <p><label for="nom"></label>
				  <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" required>
				  <label for="prenom"></label>
				  <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" required>
				</div>
				<div class="le_reste">
				  <label for="email"></label>
				  <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php if(isset($email)) { echo $email; } ?>" required >
			      <br />

				<label for="tel"></label>
				  <input type="text" class="form-control" id="tel" placeholder="Portable" name="tel" value="<?php if(isset($tel)) { echo $tel; } ?>" required>
			
				  <label for="password"></label>
				  <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password" required >
				  <br />

				  </div>
				  <span class="conditions"><label><input type="checkbox" name="remember" required >J'ai lu et j'accepte les <a href="inscription.php">Conditions Générales d'Utilisation</a></label><br /></span>
				  <span class="termes"><label><input type="checkbox" name="remember">Je veux recevoir les conseils de Citrus personnalisés pour mon équipements</label><br /></span>
				<button type="submit" class="form-control btn btn-success" name='signinform'>S'inscrire</button>
				<br />
				
			 </p> </form>
			</div>
			<div class="image">
			</div>
		</div>
		<?php require 'footer.php'; ?>
	</body>
</html>