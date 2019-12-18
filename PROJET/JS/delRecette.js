window.addEventListener("DOMContentLoaded", function() {
    
    var btn = document.getElementById("btn-supprimer");
    //var id_recette = document.getElementById("recette_id");
    btn.addEventListener("click", function(e) {
        //e.preventDefault();
        // js confirm ?
        var id_recette =  btn.dataset.id_rec ;
        var xhr = new XMLHttpRequest();
        document.addEventListener("load",function(){ });
        xhr.open("GET","../PHP/wsSuppression.php?id_recette=" + id_recette);
        xhr.send();
        alert(" Recette supprimée !");
        document.location.href = "../PHP/listeRecettes.php";
    }); 
});
