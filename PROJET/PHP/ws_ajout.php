<?php

include "./bdd.php";

if (!empty($_REQUEST)) {
    $new_recette = $_REQUEST;
    add_recette($new_recette);
    http_response_code(201); // "created"
    //header("Location: listeRecette.php");
} else {
    http_response_code(500); // "bad request"
}
