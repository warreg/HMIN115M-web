<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Liste des Recettes</title>
</head>
<body>
<nav>
    <a href="../index.html">Acceuil</a>
    <a href="listeRecettes.php">Recettes</a>
    <a href="rechercheRecettes.php">Recherche</a>
    <a href="ajout.php">Ajouter</a>
</nav>    
<h1>Liste des recettes</h1> <br>
<article>



<!-- Affichage liste des recetttes PHP -->
<?php
include "./bdd.php";

$liste_recettes = get_recettes();
foreach ($liste_recettes as $recette) {
    echo '<img class="article-img"  src="' . $recette["photo"] . '" alt=" photo recette " >';
    echo "<h2>" . $recette["type_recette"] ." : " . $recette["titre"] . "</h2>";
    echo "<p>  Ajouté le  ". $recette["date_ajout"]. " , par " .$recette["nom"] . "</p>"  ;
    echo "<p> Cuisine  " . $recette["categorie"] . "</p>";
    echo "<p> Duree : " . $recette["duree"] . " min. </p>";
    echo "<p> Pour " . $recette["nbre_personne"] . " personne(s) </p>";
    echo "<p> Preparation: " . $recette["preparation"] . "</p>";
    echo "<p>" . $recette["email"] . "</p>";
    echo "<hr>" ;// <hr>
}

?>
<!-- Fin PHP  -->


</article>
</body>
</html>