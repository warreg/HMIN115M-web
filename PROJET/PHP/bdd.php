<?php

/*fonction ​ ​ qui lit les données depuis le fichier ​ data.json*/
function get_recettes(){
    $data_json = file_get_contents("../JSON/data.json");
    $data = json_decode($data_json, true);
    return $data;
}
/* fonction  qui prend en argument un tableau contenant les données
d’une nouvelle recette, et ajoute ces données au fichier ​ data.json*/
function add_recette($r){
    $data = get_recettes();
    array_push($data, $r);
    file_put_contents("../JSON/data.json", json_encode($data));
}

function del_recette($id){
    
}