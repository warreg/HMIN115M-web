<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet"  href="css/bootstrap.min.css" > 
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One" rel="stylesheet">
    <script type="text/javascript" src="#"></script>

    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: }
    .w3-bar-block .w3-bar-item {padding:20px}
</style>
  


    <link rel="stylesheet" href="../CSS/Styles.css">

    <title>Marmit'UM | Recettes</title>
</head>
<body>
<ul class="topnav">
	  <li><a href="../index.php">Accueil</a></li>
	  <li><a class="active" href="listeRecettes.php">Recettes</a></li>
    <li><a href="rechercheRecettes.php">Recherche</a></li>
    <li><a href="ajout.php">Nouvelle Recette</a></li>
	  <!-- <li class="right"><a href="formConnexion.php">Connexion</a></li> -->
	</ul>	
  </br><br><br></br><br><br>
  <center><h1>Liste des recettes</h1> </center>

<!-- Affichage liste des recetttes PHP -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
   
  <!-- Affichage liste des recetttes PHP -->
  
  <?php
include "./bdd.php";
$liste_recettes = get_recettes();
foreach ($liste_recettes as $recette) {
    echo '<div class="w3-quarter">';
    echo '<div id="id_div">';
    echo '<img  src="' . $recette["photo"] . '" alt=" photo recette " style="width:100" style="height:100"  >';
    echo "</div>";
    echo "<h3>" . $recette["type_recette"] ." : " . $recette["titre"] . "</h2>";
    echo "<p>  Ajouté le : ". $recette["date_ajout"]. " , par " .$recette["nom"] . "</p>"  ;
    echo "<p> Cuisine : " . $recette["categorie"] . "</p>";
    echo "<p> Duree: " . $recette["duree"] . " min. </p>";
    echo "<p> Pour " . $recette["nbre_personne"] . " personne(s) </p>";
    echo "<p> Preparation: " . $recette["preparation"] . "</p>";
    echo "<p>" . $recette["email"] . "</p>";
    echo "</div>";
}   

?>
<!-- Fin PHP  -->

   </div>
 </div>

</br></br></br>

<footer >
    <p>© 2019 Wade & Marone</p>
</footer>
</body>
</html>