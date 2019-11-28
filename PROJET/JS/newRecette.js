window.addEventListener("DOMContentLoaded", function() {


    //Ajout nouvelle recette
    var form = document.querySelector("#form-ajout");
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        var new_recette = new FormData(form);
        //var input = document.querySelectorAll("input");
        var xhr = new XMLHttpRequest();
        xhr.open("POST","../PHP/ws_ajout.php");
        xhr.send(new_recette);
        //input.value =""; //pour vider les données apres envoi du formulaire
    });


});
