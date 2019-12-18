window.addEventListener("DOMContentLoaded", function() {

    //Envoi des infos de connexion
    var msg_erreur = document.getElementById("msg-erreur");
    //var msg_affichage = document.getElementById("affichage");
    msg_erreur.innerHTML = "";
    var form = document.querySelector("#form-connexion");
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        var info_connex = new FormData(form);
        var xhr = new XMLHttpRequest();
        document.addEventListener("load",function(){
           //msg_affichage.innerHTML = "<h2>Bienvenue "+login+"</h2>";
        });
        xhr.open("POST","../PHP/wsConnexion.php");
        xhr.send(info_connex);
        document.location.href = "../PHP/connexionStatut.php";
    });


});
