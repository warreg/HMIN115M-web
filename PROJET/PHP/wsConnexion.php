<?php

session_start();

if (!empty($_REQUEST)) {
    $login = $_REQUEST["login"];
    $pwd = $_REQUEST["mdp"];
    $users = json_decode(file_get_contents("../JSON/users.json"),true);
    $statut = "false";
    foreach ($users as $cle => $user) {
        if ($user["login"] == $login && $user["mdp"] == $pwd)  {
            $statut = "true" ;
        }
    }
    //http_response_code(200);
    $_SESSION["connexion"] = $statut;
    echo $statut;
    echo "-";
    echo $login;
    //var_dump($_SESSION["connexion"]);
}else {
    http_response_code(500);
}