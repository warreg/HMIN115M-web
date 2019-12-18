<?php

include "./bdd.php";
// js renvoi l'id à supprimer
// $data = get_recettes();
// print("Avannt \n");
// print_r($data);
// print("\n");
// print("###");
// $id = "0a97f4c67631d524b15d75a63719424e";
// del_recette($id);
// $data = get_recettes();
// print("Apres \n");
// print_r($data);


/* Suppression de recette */
function del_recette1($id){
    $arr_recette = get_recettes(); 
    foreach ($arr_recette as $num_rec => $rec) {
        if ($rec["id_recette"] == $id){  
            unset($arr_recette[$num_rec]);
        }
    }
    file_put_contents("../JSON/data.json", json_encode($arr_recette));
}

$id="ffhihhguyiyui";
del_recette1($id);