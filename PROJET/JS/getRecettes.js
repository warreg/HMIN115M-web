window.addEventListener("DOMContentLoaded", function() {

    function lectureRecettes() {
        var requete = new XMLHttpRequest();
		// on détermine ce qui doit se passer quand on recevra la réponse du service
		requete.addEventListener("load", function(event) {
			// on décode le format JSON pour obtenir un objet Javascript
            var recettes = JSON.parse(event.target.responseText);
            var listeRecettes = document.getElementById("article-recette");
            listeRecettes.innerHTML = "";
            for (var i = 0; i < recettes.length; i++) {
                listeRecettes.innerHTML += '<img class=article-img src=" ' + recettes[i].photo + ' " alt="photo recette"> ' +
                 "<h2> " + recettes[i].type_recette + " : " + recettes[i].titre + "</h2>" +
                 "<p> Ajouté le  " + recettes[i].date_ajout + " , par " + recettes[i].nom + "</p>" +
                 "<p> Cuisine  " + recettes[i].categorie + "</p>" +
                 "<p> Durée : " + recettes[i].duree + "min. </p>" + 
                 "<p> Pour " + recettes[i].nbre_personne + " personne(s) </p>" + 
                 "<p> Préparation : " + recettes[i].preparation + "</p>" +
                 "<p>" + recettes[i].email + "</p> <hr>";
            }
		});
		// on envoie la requête à l'URL du webservice
		requete.open("GET", "../PHP/ws_lecture.php");
		requete.send();
    }

    //lectureRecettes();
    var form = document.getElementById("form-recherche");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        //var filtre_recherche = document.getElementById("texte-filtre");
        //var filtre = filtre_recherche.value;
        //envoi de filtre_recherche.value 
        // if (filtre != ""){
        //     var xhr = new XMLHttpRequest();
        //     xhr.open("GET", "../PHP/TEST.php?filtre_recherche=" + filtre);
        //     xhr.send();
        // }
        
        lectureRecettes();
    });

});
