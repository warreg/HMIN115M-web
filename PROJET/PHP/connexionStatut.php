<?php

session_start();

$statut = $_SESSION["connexion"];

$statut = true;
if ($statut == true){
    echo "<h3>Bienvenue $login </h3>";
    echo "<p> <a href='formConnexion.php'> Se deconnecter </a> </p>";
}
else {
    echo "Non reconnu";
    echo "<p> <a href ='formConnexion.php'> Se connecter </a> </p>  ";
}

?>