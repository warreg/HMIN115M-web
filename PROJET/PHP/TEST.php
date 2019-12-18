<?php

include "./bdd.php";

session_start();

// if (!empty($_REQUEST)) {
//     $login = $_REQUEST["login"];
//     $pwd = $_REQUEST["mdp"];

$login = "alphonse";
$mdp = "abcdef";
$users = json_decode(file_get_contents("../JSON/users.json"),true);
$statut = false;
foreach ($users as $cle => $user) {
    if ($user["login"] == $login && $user["mdp"] == $mdp)  {
        $statut = true ;
    }
}

var_dump($statut);
//     //http_response_code(200);
//     $_SESSION["connexion"] = $statut;
    
// }else {
//     http_response_code(500);
// }