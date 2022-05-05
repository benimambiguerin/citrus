<?php
session_start();
require 'db.php';

if (isset($_GET['id']) AND $_GET['id'] > 0)
		{
			$getid = intval($_GET['id']);
			$requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
			$requser->execute(array($getid));
			$userinfo = $requser->fetch();
		}

if(isset($_SESSION['id']))
{
	$requser = $bdd->prepare("SELECT * FROM user WHERE id =?");
	$requser->execute(array($_SESSION['id']));
	$user = $requser->fetch();
	
	if(isset($_POST['nvnom']) AND !empty($_POST['nvnom']) AND  $_POST['nvnom']!= $user['nom'])
	{
		$nvnom = htmlspecialchars($_POST['nvnom']);
		$insertnom = $bdd->prepare("UPDATE user SET nom = ? WHERE id = ?");
		$insertnom->execute(array($nvnom, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if(isset($_POST['nvprenom']) AND !empty($_POST['nvprenom']) AND  $_POST['nvprenom']!= $user['prenom'])
	{
		$nvprenom = htmlspecialchars($_POST['nvprenom']);
		$insertprenom = $bdd->prepare("UPDATE user SET prenom = ? WHERE id = ?");
		$insertprenom->execute(array($nvprenom, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if(isset($_POST['nvlemail']) AND !empty($_POST['nvlemail']) AND  $_POST['nvlemail']!= $user['email'])
	{
		$nvlemail = htmlspecialchars($_POST['nvlemail']);
		$insertemail = $bdd->prepare("UPDATE user SET email = ? WHERE id = ?");
		$insertemail->execute(array($nvemail, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if(isset($_POST['newpassword']) AND !empty($_POST['newpassword']) AND  $_POST['newpassword']!= $user['password'])
	{
		
		$password = sha1($_POST['password']);
		$insertpassword = $bdd->prepare("UPDATE user SET password = ? WHERE id = ?");
		$insertpassword->execute(array($newpassword, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if(isset($_POST['nvtel']) AND !empty($_POST['nvtel']) AND  $_POST['nvtel']!= $user['tel'])
	{
		$nvtel = htmlspecialchars($_POST['nvtel']);
		$inserttel = $bdd->prepare("UPDATE user SET tel = ? WHERE id = ?");
		$inserttel->execute(array($nvtel, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if(isset($_POST['nvcp']) AND !empty($_POST['nvcp']) AND  $_POST['nvcp']!= $user['cp'])
	{
		$nvcp = htmlspecialchars($_POST['nvcp']);
		$insertcp = $bdd->prepare("UPDATE user SET cp = ? WHERE id = ?");
		$insertcp->execute(array($nvcp, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if(isset($_POST['nvlville']) AND !empty($_POST['nvlville']) AND  $_POST['nvlville']!= $user['ville'])
	{
		$nvlville = htmlspecialchars($_POST['nvlville']);
		$insertville = $bdd->prepare("UPDATE user SET ville = ? WHERE id = ?");
		$insertville->execute(array($nvlville, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if(isset($_POST['nvladresse']) AND !empty($_POST['nvladresse']) AND  $_POST['nvadresse']!= $user['adresse'])
	{
		$nvladresse = htmlspecialchars($_POST['nvladresse']);
		$insertadresse = $bdd>prepare("UPDATE user SET adresse = ? WHERE id = ?");
		$insertadresse->execute(array($nvladresse, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
		
	}
	
	if (isset($_POST['nvnom']) AND $_POST['nvnom'] == $user['nom'])
	{
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if (isset($_POST['nvprenom']) AND $_POST['nvprenom'] == $user['prenom'])
	{
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if (isset($_POST['nvlemail']) AND $_POST['nvlemail'] == $user['email'])
	{
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if (isset($_POST['newpassword']) AND $_POST['newpassword'] == $user['password'])
	{
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if (isset($_POST['nvtel']) AND $_POST['nvtel'] == $user['tel'])
	{
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if (isset($_POST['nvcp']) AND $_POST['nvcp'] == $user['cp'])
	{
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if (isset($_POST['nvlville']) AND $_POST['nvlville'] == $user['ville'])
	{
		header('Location: profil.php?id='.$_SESSION['id']);
	}
	
	if (isset($_POST['nvladresse']) AND $_POST['nvladresse'] == $user['adresse'])
	{
		header('Location: profil.php?id='.$_SESSION['id']);
	}
		
	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Inscription | Citrus</title>
		<link rel="stylesheet" href="profilstyle.css" />
	</head>

	<body>
<?php
require 'headerp.php';
?>
		<div id="signin">
			<div class="section_gauche">
			  <h1>Modifier mon profil</h1>
			  <form action="" method='post'>
			  <div class="nom_prenom">
				  <p><label for="nom"></label>
				  <input type="text" class="form-control" id="nom" placeholder="Nom" name="nvnom" value="<?php echo $user['nom'] ?>">
				  <label for="prenom"></label>
				  <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="nvprenom" value="<?php echo $user['prenom'] ?>">
				</div>
				<div class="le_reste">
				  <label for="email"></label>
				  <input type="email" class="form-control" id="email" placeholder="Email" name="nvlemail" value="<?php echo $user['email'] ?>">
			      <br />
			
				  <label for="password"></label>
				  <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="newpassword"  value="<?php echo $user['password'] ?>">
				  <br />
			
				  <label for="tel"></label>
				  <input type="text" class="form-control" id="tel" placeholder="Portable" name="nvtel" value="<?php echo $user['tel'] ?>">
				  <br />
				
				  <label for="cp"></label>
				  <input type="text" class="form-control" id="cp" placeholder="Code postal" name="nvcp" value="<?php echo $user['cp'] ?>">
				  <br />
				
				  <label for="ville"></label>
				  <input type="text" class="form-control" id="ville" placeholder="Ville" name="nvlville"  value="<?php echo $user['ville'] ?>">
				  <br />
				
				  <label for="adresse"></label>
				  <input type="text" class="form-control" id="adresse" placeholder="Adresse" name="nvladresse" value="<?php echo $user['adresse'] ?>">
				  </div>
				  
				  <input type="submit" class="editionform" name='editionform' >
				<br />
				
			 </p> </form>
			</div>
		<?php require 'footer.php'; ?>
	</body>
</html>