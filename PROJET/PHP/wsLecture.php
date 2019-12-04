<?php

include "./bdd.php";

$arr_recette = get_recettes(); //retourner json_encode($arr_recettes)

if (!empty($_REQUEST["filtre_recherche"])){
        $filtre_recherche = $_REQUEST["filtre_recherche"];
        $arr_recette_filtre = array();
        foreach ($arr_recette as $key => $val) {
            foreach ($val as $key1 => $val1) {
                if (stripos($val1,$filtre_recherche)){array_push($arr_recette_filtre,$val);}
            }
        }
    echo json_encode($arr_recette_filtre);
}
else {
    echo json_encode($arr_recette);
}
