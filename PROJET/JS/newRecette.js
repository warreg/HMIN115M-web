window.addEventListener("DOMContentLoaded", function() {


    //Ajout nouvelle recette
    var form = document.querySelector("#form-ajout");
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        var new_recette = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.open("POST","../PHP/wsAjout.php");
        xhr.send(new_recette);
        xhr.addEventListener("load",function(event){
            var rep = event.target.responseText;
            if (rep === "ok"){
                alert("Recette ajoutée avec succès ! ");
                document.location.href = "../PHP/listeRecettes.php";
            }else{
                alert(" Ajout impossible !\n Connectez-vous d'abord  !");
                document.location.href = "../PHP/formConnexion.php";
            }
        });
    });


});