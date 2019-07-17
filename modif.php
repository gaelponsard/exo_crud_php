<?php

include('connect_bdd.php');

$nom = $_POST['nom'];
$naissance = $_POST['couleur'];
$adresse = $_POST['taille'];
$mail = $_POST['col'];
$id = $_POST['id'];

$update = $bdd->prepare('UPDATE tshirt SET nom = :nom, couleur = :couleur, taille = :taille, col = :col WHERE id = :id');
$update->execute(array(
  'nom' => $nom,
  'couleur' => $couleur,
  'taille' => $taille,
  'col' => $col,
  'id' => $id ));

  header('location: index.php');

?>