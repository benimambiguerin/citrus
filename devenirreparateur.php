<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Citrus</title>
		<link rel="stylesheet" href="devenirreparateurstyle.css" />
	</head>
	
	<body>
		
<?php
require_once 'db.php';
getAllServices();
if(isset($_SESSION['current_user'])){
	$connecter=true;
	$current_user=$_SESSION['current_user'];
	$reparateur = $_SESSION['current_user']['reparateur'];
}


		require 'headerp.php';
?>
			<div id="intro_reparateur">
			<div class="texte">
			<h2>Roulez et réparez : devenez réparateur de vélo itinérant !</h2>
			<p>Cyclofix vous trouve les clients et simplifie la gestion de votre activité. Vous vous concentrez sur votre coeur de métier : la réparation et le contact avec les clients.<br />
			<br />
			Notre mission ? Vous faire vivre de votre passion.</p><br /><br />
			<br />
			<button type="submit" class="form-control btn btn-success" name='signinform'>Devenir réparateur ></button>
			</div>
			</div>

		<?php require 'footer.php'; ?>
	</body>
</html>