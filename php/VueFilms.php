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
    </head>
    <body>
        <?php include("menu.php"); ?>
        <div class="contenu">
            <div class="container-fluid mt-1 p-5">
                <?php
                echo '<h1> Les films</h1>';
                ?>
                <div class="tableau">
                    <?php
                    require_once 'ModeleFilms.php';
                        $films = new ModeleFilms();
                        $films->obtenirListeFilms();
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>