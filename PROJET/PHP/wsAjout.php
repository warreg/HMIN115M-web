<?php
session_start();
$etat = $_SESSION["connexion"];

include "./bdd.php";

if (!empty($_REQUEST)) {
    $new_recette = $_REQUEST;
    if ($etat == "true"){
        add_recette($new_recette);
        echo "ok";
        http_response_code(201);
    }else{
        echo "ko";
    }
    
} else {
    http_response_code(500); // "bad request"
}
