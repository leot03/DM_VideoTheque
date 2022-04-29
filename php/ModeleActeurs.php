<?php

require_once 'Modele.php';

class ModeleActeurs {
    
    public function obtenirNomActeurs($debut) {
//         try {
//             $requete = $this->_bdd->query("set lc_time_names = 'fr_FR'");

//             $requete = $this->_bdd->query("Select nom, prenom, utilisateur_id, "
//                     . "DATE_FORMAT(dateNaissance, '%d %M %Y') as dateNaissance "
//                     . "from utilisateurs order by nom");

//             echo "<br><br><select name='idPersonne' id='idPersonne'>\n";
//             echo "<option value='-1'>Sélectionner une personne</option>\n";

//             while ($ligne = $requete->fetch()) {
//                 $nom = $ligne["nom"];
//                 $prenom = $ligne["prenom"];
//                 $date = $ligne["dateNaissance"];
//                 $depNom = $ligne["utilisateur_id"];

//                 echo "<option value='$id'>$nom $prenom $date</option>\n";
//             }
//             echo '</select>';

//             $requete->closeCursor();
//         } catch (PDOException $ex) {
//             die('<br/> Pb génération liste personnes ' . $ex->getMessage());
//         }

//connexion a la bdd
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
        
        
        $term = $_GET['term'];
        
        $requete = $bdd->prepare('SELECT nomActeur FROM acteurs WHERE nomActeur LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE
        $requete->execute(array('term' => '%'.$term.'%'));
        
        $array = array(); // on créé le tableau
        
        while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
        {
            array_push($array, $donnee['nomActeur']); // et on ajoute celles-ci à notre tableau
        }
        
        echo json_encode($array); // il n'y a plus qu'à convertir en JSON

        }
}