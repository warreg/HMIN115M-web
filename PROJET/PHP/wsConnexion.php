<?php

session_start();

if (!empty($_REQUEST)) {
    $login = $_REQUEST["login"];
    $pwd = $_REQUEST["mdp"];
    $users = json_decode(file_get_contents("../JSON/users.json"),true);
    $statut = true;
    foreach ($users as $us) {
        if ($us["login"] == $login && $us["mdp"] == $pwd)  {
            $statut = true ;
        }
    }
    //http_response_code(200);
    $_SESSION["connexion"] = $statut;
    
}else {
    http_response_code(500);
}

//header("Location : connexionStatut.php");