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
        <a href='modification.php?id=<?php echo $donnees['id']; ?>'><button class="btn_modif" type="submit"
                name="update">Modifier</button><a>
        <a href='suppression.php?id=<?php echo $donnees['id']; ?>'><button class="btn_suppr" type="submit"
                name="delete">Supprimer</button><a>      
    </div>

    <form method="post" action="suppression.php">

        <div class="input-group">
            <label>Id:</label>
            <input type="text" name="id" value="<?php echo $donnees['id']; ?>">
        </div>
        <div class="input-group">
            <label>Nom:</label>
            <input type="text" name="nom" value="<?php echo $donnees['nom']; ?>">
        </div>
        <div class="input-group">
            <label>Couleur:</label>
            <input type="text" name="couleur" value="<?php echo $donnees['couleur']; ?>">
        </div>
        <div class="input-group">
            <label>Taille:</label>
            <input type="text" name="taille" value="<?php echo $donnees['taille']; ?>">
        </div>
        <div class="input-group">
            <label>col</label>
            <input type="text" name="col" value="<?php echo $donnees['col']; ?>">
        </div>

    </form>
    <?php   
    }
$tshirts->closeCursor(); // on ferme la boucle et termine le traitement de la requete
?>
    <center><a href='ajout.php'><button class="btn_ajout">Ajouter un t-shirt</button><a></center>


</body>

</html>