<?php
require 'connect_bdd.php';

$id = $_GET['id'];

$req = $bdd->prepare("DELETE FROM tshirt WHERE id = :id");
$req->execute(array(
  ':id' => $id
));

header('location: index.php');

?>