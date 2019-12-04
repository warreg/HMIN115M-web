window.addEventListener("DOMContentLoaded", function() {


    //Envoi des infos de connexion
    var form = document.querySelector("#form-ajout");
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        var new_recette = new FormData(form);
        //var input = document.querySelectorAll("input");
        var xhr = new XMLHttpRequest();
        xhr.open("POST","../PHP/wsConnexion.php");
        xhr.send(new_recette);
    });


});
