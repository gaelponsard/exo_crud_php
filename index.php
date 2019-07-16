<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Edition T-Shirts</title>

</head>

<body>
    <?php
include('connect_bdd.php');


$tshirts = $bdd->prepare('SELECT * FROM tshirt');
$tshirts->execute();
while ($donnees = $tshirts->fetch())
{
 ?>
 <div class="input-group">
            <button class="btn_modif" type="submit" name="update">Modifier</button>
            <a href='suppression.php?id=<?php echo $donnees['id']; ?>'><button class="btn_suppr" type="submit" name="delete">Supprimer</button><a>
        </div>
 
    <form method="post" action="suppression.php">
    <div class="input-group">
            <label>Id:</label>
            <span><?php echo $donnees['id']; ?>&nbsp;&nbsp;</span>
        </div>
        <div class="input-group">
            <label>Nom:</label>
            <span><?php echo $donnees['nom']; ?>&nbsp;&nbsp;</span>
        </div>
        <div class="input-group">
            <label>Taille:</label>
            <span><?php echo $donnees['taille']; ?>&nbsp;&nbsp;</span>
        </div>
        <div class="input-group">
            <label>col</label>
            <span><?php echo $donnees['col']; ?>&nbsp;&nbsp;</span>
        </div>
        
    </form>
    <?php   
    }
$tshirts->closeCursor(); // on ferme la boucle et termine le traitement de la requete
?>
    <center><a href='ajout.php'><button class="btn_ajout">Ajouter un t-shirt</button><a></center>


</body>

</html>