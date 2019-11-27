window.addEventListener("DOMContentLoaded", function() {


    //Ajout nouvelle recette
    var form = document.querySelector("#form-ajout");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        var new_recette = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.open("POST","../PHP/ws_ajout.php",true);
        xhr.setRequestHeader('X-Requested-With','xmlhttprequest');
        xhr.send(new_recette);
        console.log(new_recette);
        //new_recette.value = ""
    });


});
