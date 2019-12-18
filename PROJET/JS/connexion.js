window.addEventListener("DOMContentLoaded", function() {

    //Envoi des infos de connexion
    var msg_erreur = document.getElementById("msg-erreur");
    var msg_affichage = document.getElementById("affichage");
    var deconex = document.getElementById("deconnex");

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
        // i wait 
        xhr.addEventListener("load",function(e){
        // on recup la reponse coté serveur 
            var reponse = e.target.responseText;
            var resp = reponse.split("-");
            if (resp[0] === "true") {
                msg_affichage.innerHTML = "<center><h2>Bienvenue sur Marmit'UM </h2>  " + "<font color='#53af57'><h2>"+resp[1]+"</h2></font></center>"+'</br></br><img src="../img/tea.png" alt="Nature" style="width:100%; height:100%">'  ;
                deconex.innerHTML = "Deconnexion";
            }else{
                msg_erreur.innerHTML = "<center>Identifiants incorrects</center>";
            }
         });
         
    });


});
