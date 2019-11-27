<?php

// lit les messages de la base de données, et les retourne au format JSON
function get_recettes_json() {
    $data = file_get_contents("../JSON/data.json");
    return $data;
}
/*fonction ​ ​ qui lit les données depuis le fichier ​ data.json*/
function get_recettes(){
    $data_json = get_recettes_json();
    $data = json_decode($data_json, true);
    //$filtre = "tarte";
    // if (isset($_REQUEST["filtre_recherche"])){
    //     $filtre_recherche = $_REQUEST["filtre_recherche"];
    // }
    // if ($filtre != null){
    //     foreach ($data as $key => $val) {
    //         foreach ($val as $key_1 => $val_1) {
    //             $data_filtre = array();
    //             if (stripos($val_1,$filtre)) {
    //                 array_push($data_filtre,$val);
    //             }
    //         }
    //     }
    //     return $data_filtre;
    // }
    // else {
        return $data;
    //}
}
/* fonction  qui prend en argument un tableau contenant les données
d’une nouvelle recette, et ajoute ces données au fichier ​ data.json*/
function add_recette($r){
    $data = get_recettes();
    array_push($data, $r);
    file_put_contents("../JSON/data.json", json_encode($data));
}

//     return $tab_recette["recettes"];

//   $.get("php/lecture.php", {elem:element}, function(data) {

