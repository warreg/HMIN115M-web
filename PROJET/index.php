<?php 
session_start();
$etat = $_SESSION["connexion"];
?>
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
    <script type="text/javascript" src="../JS/deconnexion.js"></script>
  
    <link rel="stylesheet" href="../CSS/Styles.css">
    <title>Marmit'UM</title>
</head>

<body>
	<ul class="topnav">
	  <li><a class="active" href="index.php">Accueil</a></li>
	  <li><a href="../PHP/listeRecettes.php">Recettes</a></li>
    <li><a href="../PHP/rechercheRecettes.php">Recherche</a></li>
    <li><a href="../PHP/ajout.php">Nouvelle Recette</a></li>
	  <li class="right"><a <?php 
        if ($etat == "true") {
            echo " id='deconnex' href='../PHP/formConnexion.php'> Deconnexion";
        }else{
            echo "href='../PHP/formConnexion.php'> Connexion";
        }
        ?></a>
    </li>
	</ul>	  

<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    </br><img src="..//img/01111.png" alt="img baniere" style="width:100%; height:60%">
    <div class="w3-container">
    <img src="../img/tea.png" alt="img jumbotron" style="width:100%; height:100%">
  </div>
</div>


<footer>
    <p>© 2019 Wade & Marone</p>
</footer>

</body>
</html>