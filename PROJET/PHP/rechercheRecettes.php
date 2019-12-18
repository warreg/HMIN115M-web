<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="text/javascript"  src="../JS/getRecettes.js"></script>
    <script type="text/javascript"  src="../JS/delRecette.js"></script>
    <title>Rechercher recettes</title>
</head>

<body>
<nav>
    <a href="../index.html">Acceuil</a>
    <a href="./listeRecettes.php">Recettes</a>
    <a href="./rechercheRecettes.php">Recherche</a>
    <a href="ajout.php">Ajouter</a>
    <a href="formConnexion.php">Connexion</a>
</nav>    
<h1>Trouver une recette</h1> <br>


<div>
<form id="form-recherche">
    <input type="submit"  id="btn-rechercher" value="Rechercher">
    <input type="text"  id="texte-filtre" placeholder="     Rechercher une recette ">
</form>
</div>


<br>
<hr>
<br>


<div>
    <article id="article-recette">

    </article>
</div>



</body>
</html>