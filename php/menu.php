<?php
$chemin = getcwd();
$racine = 'php';
if (strpos($chemin, "php")) {
    $racine = '.';
}
?>
<div class="container-fluid navbar navbar-expand-md navbar-dark bg-color">
    <?php
    echo '<a class="boutons btn btn-color" href="' . $racine . './index.html">Accueil</a>';
    echo '<a class="boutons btn btn-color" href="' . $racine . '/VueFilms.php">Liste des films</a>';
    echo '<a class="boutons btn btn-color" href="' . $racine . '/VueActeurs.php">Les films pour un acteur</a>';
    echo '<a class="boutons btn btn-color" href="' . $racine . '/pagevide.php">Recherche par genre</a>';
    echo '<a class="boutons btn btn-color" href="' . $racine . '/pagevide.php">Ajout nouveau film</a>';
    ?>
</div>