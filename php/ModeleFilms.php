<?php

require_once 'Modele.php';

class ModeleFilms extends Modele {

    public function obtenirListeFilms() {
        $requete = $this->_bdd->query("set lc_time_names = 'fr_FR'")
                or die(print_r($requete->errorInfo()));

        $requete = $this->_bdd->query('Select titre, duree from films') or die(print_r($requete->errorInfo()));

        echo "<table class='table table-bordered'>";
        echo "<tr> <th>Nom du film</th> <th style='text-align: center;'>Durée du film</th>";

        while ($ligne = $requete->fetch()) {
            $titre = $ligne["titre"];
            $duree = $ligne["duree"];

            echo '<tr> <td>' . $titre . '</td> <td class="duree">' . $duree . '&nbsp;min</td> </tr>';
        }

        echo "</table>";
        $requete->closeCursor();
    }
}
