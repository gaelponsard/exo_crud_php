<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Ajout T-shirt</title>

</head>

<body>
    <form method="post" action="">
    <div class="input-group">
			<label>Nom</label>
			<input type="text" name="nom" value="">
		</div>
        <div class="input-group">
            <label>couleur</label>
            <select name="couleur" id="couleur">
                <option value="bleu">bleu</option>
                <option value="jaune">jaune</option>
                <option value="noir">noir</option>
                <option value="rouge">rouge</option>
                <option value="vert">vert</option>
                <option value="orange">orange</option>
                <option value="vert">blanc</option>
            </select>
        </div>
        <div class="input-group">
            <label>taille</label>
            <select name="taille" id="taille">
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
            </select>
        </div>
        <div class="input-group">
            <label>col</label>
            <select name="col" id="col">
                <option value="V">V</option>
                <option value="rond">rond</option>
            </select>
        </div>
        <div class="input-group">
            <button class="btn" type="submit" name="save">Ajouter</button>
        </div>
    </form>



    <?php
include('connect_bdd.php');

$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$couleur = isset($_POST['couleur']) ? $_POST['couleur'] : NULL;
$taille = isset($_POST['taille']) ? $_POST['taille'] : NULL;
$col = isset($_POST['col']) ? $_POST['col'] : NULL;

$req = $bdd->prepare("INSERT INTO tshirt(nom, couleur, taille, col) VALUES(:nom, :couleur, :taille, :col)");
$req->execute(array(
  'nom' => $nom,
  'couleur' => $couleur,
  'taille' => $taille,
  'col' => $col ));
 ?>
 <center><br><br>
 <a href="index.php"><span>Retour Accueil</span></center>

</body>

</html>