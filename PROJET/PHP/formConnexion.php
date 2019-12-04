<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <script  type="text/javascript" src="verif_pwd.js"></script>
    <title>Connexion</title>
</head>
<body>
<nav>
    <a href="../index.html">Acceuil</a>
    <a href="listeRecettes.php">Recettes</a>
    <a href="rechercheRecettes.php">Recherche</a>
    <a href="ajout.php">Ajouter</a>
    <a href="formConnexion.php">Connexion</a>

</nav>    
<h1>Se connecter</h1> <br>
    <div id="affichage">
    <form action="#" method="post">
        login
        <input type="text" name="login" id="user" required> <br><br>
        mdp
        <input type="password" name="pwd" id="mdp" required> <br><br>
        <input type="submit" value="Envoyer">
    </form>
    </div>
    <p id="message"></p>
</body>
</html>

