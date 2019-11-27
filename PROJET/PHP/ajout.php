<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="text/javascript"  src="../JS/newRecette.js"></script>
    <title>Marmit'UM</title>
</head>

<body>
    <nav>
        <a href="../index.html">Acceuil</a>
        <a href="listeRecettes.php">Recettes</a>
        <a href="rechercheRecettes.php">Recherche</a>
        <a href="ajout.php">Ajouter</a>
    </nav>
    <body>
        
        <h1>Nouvelle recette</h1> <hr> <br> 

        <form id="form-ajout">
            <p>
                <label>Titre de la recette :</label>
                <input type="text" required name="titre" placeholder="Mafé"  pattern="^[^0-9]+$">
            </p>
            <p>
                <label>Type de recette :</label>
                <input type="radio" name="type_recette" value="Entree" id="type_entree">
                <label for="type_entree">Entrée</label>
                <input type="radio" name="type_recette" value="Plat" id="type_plat" checked>
                <label for="type_plat">Plat</label>
                <input type="radio" name="type_recette" value="Dessert" id="type_dessert">
                <label for="type_dessert">Dessert</label>
            </p>
            <p>
                <label>Type de cuisine :</label>
                <input type="text" required name="categorie" placeholder=" exp: Sénégalaise">
            </p>
            <p>
                <label>Temps de préparation (mn) :</label>
                <input type="number"   name="duree" required>
            </p>
            <p>
                <label>Nombre de personnes :</label>
                <input type="number" name="nbre_personne" required>
            </p>
            <p>
                <label>Auteur :</label>
                <input type="text" required name="nom" placeholder="alphonse">
            </p>
            <p>
                <label>Adresse email de l'auteur :</label>
                <input type="email" name="email" required placeholder="alphonse@um.net">
            </p>
            <p>
            <label>Preparation :</label>
                <textarea name="preparation"  required  placeholder="Ingrédients:... Étapes: 1)…" ></textarea>
            </p>
            <p>
                <label>Date d'ajout :</label>
                <input name="date_ajout"  required type="date">
            </p>
            <p>
                <label>Illustration (URL) :</label>
                <input type="text" name="photo"   required placeholder="http://google.com/imagegraffiti.jpg">
            </p>
            <p>
                <input type="submit" value="Ajouter">
            </p>
        </form>
    </body>
</html>