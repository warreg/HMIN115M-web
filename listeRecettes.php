<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste Recettes</title>
</head>
<body>
    
fljhikj


<?php
include "./bdd.php";

$liste_rettes = get_recettes();



// foreach ($liste_recettes as $key => $value) {
//     echo $value;
// }



foreach ($liste_recettes as $recette) {
    echo "<h1>" . $recette["titre"] . "</h1>";
    echo "<p> Par " .$recette["nom"]. "(" .$recette["email"]. ") ; ajouté le : ". $recette["date"]. "</p>"  ;
    echo "<p> Cuisine : " . $recette["type"] . "</p>";
    echo "<p> Cuisine : " . $recette["categorie"] . "</p>";
    echo "<p> Duree: " . $recette["duree"] . "</p>";
    echo "<p> Pour " . $recette["nbre_personne"] . " personne(s) </p>";
    echo "<p> Preparation: " . $recette["preparation"] . "</p>";

    echo "<hr>" ;//ou ligne horizontale 
}
?>


</body>
</html>