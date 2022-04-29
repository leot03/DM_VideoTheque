<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Films</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="/img/film.png"/>
        <link href="../css/videotheque.css" rel="stylesheet" type="text/css"/>
        <link href="../js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/libs/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/libs/jquery/jquery.js" type="text/javascript"></script>
        <script src="../js/VuNouveauFilms.js" type="text/javascript"></script>
        <script>
        $( function() {
            $( "#acteur" ).autocomplete({
                source: "ModeleActeurs.php",
                minLength: 1
            });
        } );
        </script>
    </head>
    <body>
        <?php include("menu.php"); ?>
        <div class="paragraphe container-fluid mt-1 p-5">
            <?php
            echo '<h1> Recherche de films par acteur</h1>';
            ?>
        </div>
        <h4 class="m-5 w-25 p-2">Nom de l'acteur :</h4>
        <form class="m-5 d-flex">
            <input class="form-control me-2 w-25 p-2" type="text" id="acteur" placeholder="Entrez le nom de l'acteur ici">
            <button class="btn btn-primary" type="button">Chercher</button>
        </form>
        <?php include("ModeleActeurs.php"); ?>
    </body>
</html>