<?php

/*fonction ​ ​ qui lit les données depuis le fichier ​ data.json*/
function get_recettes(){
    $data = json_decode(file_get_contents("./data.json"), true);
    return $data;
}


/* fonction  qui prend en argument un tableau contenant les données
d’une nouvelle recette, et ajoute ces données au fichier ​ data.json*/
function add_recette($r){
    $data = get_recettes();
    array_push($data, $r);
    file_put_contents("./data.json", json_encode($data));
}

?>