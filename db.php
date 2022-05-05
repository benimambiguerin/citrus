<?php
	try
	{
	$bdd = new PDO('mysql:dbname=agrumes;host=localhost', 'root', 'root');
	}
	catch(Exception $e)
	{
		die('Erreur'.$e->getMessage());
	}
?>