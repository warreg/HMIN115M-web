<?php

session_start();

$login = $_REQUEST["login"];
$pwd = $_REQUEST["pwd"];

$users = json_decode(file_get_contents("../JSON/users.json"),true);

$statut = false;

foreach ($users as $us) {
    if ($us["login"] == $login && $us["mdp"] == $pwd)  {
        $statut = true ;
    }
}


// $_SESSION["connexion"] = $statut;
// $statut = $_SESSION["connexion"];
// if ($statut == true){
//     echo "Bienvenue $mail";
//     echo "<p> <a href='deconnexion.php'> Se deconnecter </a> </p>";
// }
// else {
//     echo "Non reconnu";
//     echo "<p> <a href = 'formulaire_connexion.html'> Se connecter </a> </p>  ";
// }
// header("Location : statut.php");