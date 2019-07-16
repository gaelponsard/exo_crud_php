<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Exo_PHP;charset=utf8', 'commun', 'commun');
}
catch (PDOexception $e)
{
        die('Erreur : ' . $e->getMessage());  
}

?>