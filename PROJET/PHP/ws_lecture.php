<?php

include "./bdd.php";
$recette = get_recettes_json();
http_response_code(200);
echo $recette;

?>