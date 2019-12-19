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
    <link rel="stylesheet" href="..css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Styles.css">
    <script  type="text/javascript" src="../JS/connexion.js"></script>
    <script type="text/javascript" src="../JS/deconnexion.js"></script>
    <title>Marmit'UM | Connexion</title>
</head>


<body>

<ul class="topnav">
	  <li><a  href="../index.php">Accueil</a></li>
	  <li><a href="listeRecettes.php">Recettes</a></li>
      <li><a href="rechercheRecettes.php">Recherche</a></li>
      <li><a href="ajout.php">Nouvelle Recette</a></li>
      <li class="right"><a id="deconnex" class="active" <?php 
        if ($etat == "true") {
            echo " id='deconnex' href='formConnexion.php'> Deconnexion";
        }else{
            echo "href='formConnexion.php'> Connexion";
        }
        ?></a></li>
</ul>	 </br></br> 
</br></br><div id="affichage">
    <div id="containerr">
            <!-- zone de connexion -->


                <h1>Connexion</h1>
                <form action="#" method="post"  id="form-connexion">
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" id="user" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" id="mdp" required>

                <center><input type="submit" id='submit' value='SE CONNECTER' ></center>
                <p id="msg-erreur" style="color:#f00d"></p>
            </form>
            
        </div>
        
    </div></br></br>



<footer>
    <p>© 2019 Wade & Marone</p>
</footer>


</body>
</html>

