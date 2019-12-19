window.addEventListener("DOMContentLoaded", function() {

    function lectureRecettes() {
        var requete = new XMLHttpRequest();
		// on détermine ce qui doit se passer quand on recevra la réponse du service
		requete.addEventListener("load", function(e) {
			// on décode le format JSON pour obtenir un objet Javascript
            var recettes = JSON.parse(e.target.responseText);
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
                 "<p>" + recettes[i].email + "</p>" +
                 "<input type='button'  class='btn-supprimer'  data-id_rec=" + recettes[i].id_recette + "  value='Supprimer'>  <hr> ";
            }
            var btn = document.getElementsByClassName("btn-supprimer");

            for (var i = 0; i<btn.length ; i++){
                btn[i].addEventListener("click", function() {
                    var id_recette =  this.dataset.id_rec ;
                    requete.open("GET","../PHP/wsSuppression.php?id_recette=" + id_recette);
                    requete.send();
                    requete.addEventListener("load",function(event){
                        var rep = event.target.responseText;
                        if (rep === "ok"){
                            alert("Recette supprimée avec succès ! ");
                        }else{
                            alert(" Suppression impossible !\n Connectez-vous d'abord  !");
                        }
                    });
                    //alert(" Recette supprimée !");  // js confirm ?
                    lectureRecettes();//document.location.href = "../PHP/rechercheRecettes.php";
                }); 
            }
            
        });
        
        
        var filtre_recherche = document.getElementById("texte-filtre");
        var texte_filtre = filtre_recherche.value;
        var url_open = "";
        if (texte_filtre != null) {
            url_open = "../PHP/wsLecture.php?filtre_recherche=" + texte_filtre; 
        }else{
            url_open = "../PHP/wsLecture.php";
        }
		// on envoie la requête à l'URL du webservice
		requete.open("GET", url_open);
		requete.send();
    }

    //lectureRecettes();
    var form = document.getElementById("form-recherche");
    form.addEventListener("submit", function(e) {
        e.preventDefault();        
        lectureRecettes();
    });

});
