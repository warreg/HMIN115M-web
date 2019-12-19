<?php
session_start();
$etat = $_SESSION["connexion"];

include "./bdd.php";

if (!empty($_REQUEST["id_recette"])){
    $id_recette = $_REQUEST["id_recette"];
    if ($etat == "true"){
        del_recette($id_recette);
        echo "ok";
        http_response_code(201);
    }
    else {
        echo "ko";
    }
}else{
    http_response_code(500);
}
