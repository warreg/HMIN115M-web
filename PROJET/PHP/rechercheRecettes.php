<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet"  href="css/bootstrap.min.css" > 
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One" rel="stylesheet">
    <script type="text/javascript"  src="../JS/getRecettes.js"></script>
    <script type="text/javascript"  src="../JS/delRecette.js"></script>
    <link rel="stylesheet" href="../CSS/Styles.css">
    <title>Marmit'UM | Rechercher</title>
</head>

<body>
<ul class="topnav">
	  <li><a href="../index.html">Accueil</a></li>
	  <li><a href="listeRecettes.php">Recettes</a></li>
      <li><a href="ajout.php">Nouvelle Recette</a></li>
      <li><a class="active"  href="rechercheRecettes.php">Recherche</a></li>
	  <!-- <li class="right"><a href="formConnexion.php">Connexion</a></li> -->
	</ul>	  </br></br>

    <h1>Trouver une recette</h1> <br>
    <article>
        <div>
        <form id="form-recherche">
            <input type="submit"  id="btn-rechercher" value="Rechercher">
            <input type="texte"  id="texte-filtre" placeholder="Mots-clés ">
        </form>
        </div><br>
        <div>
            <article id="article-recette">
        </div>
    </article><br><br>



<footer>
    <p>© 2019 Wade & Marone</p>
</footer>

</body>
</html>