<?php

include "./bdd.php";

if (!empty($_REQUEST["id_recette"])){
    $id_recette = $_REQUEST["id_recette"];
    del_recette($id_recette);
    http_response_code(201);
}else{
    http_response_code(500);
}
