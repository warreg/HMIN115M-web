window.addEventListener("DOMContentLoaded", function() {

    //Envoi des infos de connexion
    //document.addEventListener("load",function(){ });
    var deconnex = document.getElementById("deconnex");
    deconnex.addEventListener("click", function() {
        //e.preventDefault();
        var xhr = new XMLHttpRequest();
        document.addEventListener("load",function(){ });
        xhr.open("GET","../PHP/wsDeconnexion.php");
        xhr.send();
    });


});
