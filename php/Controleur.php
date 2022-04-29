<?php

require_once 'ModeleFilms.php';

class Controleur extends ModeleFilms {
    
    public function listeFilms() {
        $requete = $this->_bdd->query("set lc_time_names = 'fr_FR'")
                or die(print_r($requete->errorInfo()));
    }
}