<?php

include "./bdd.php";
if (isset($_REQUEST["new_recette"])) {
    $new_recette = $_REQUEST["new_recette"];
    add_recettes($new_recette);
    http_response_code(201); // "created"
    //header("Location: listeRecette.php");
    //header("Location: rechercheRecette.php");
} else {
    http_response_code(400); // "bad request"
    var_dump($new_recette);
}


