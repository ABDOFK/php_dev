<?php
function rechercher_etudiant($nom, $prenom,$age)
{
    $niveaux = ["niveau_1ere annee.txt", "niveau_2ere annee.txt", "niveau_3ere annee.txt"];

    foreach ($niveaux as $fichier) {
        if (file_exists($fichier)) {
            $etudiants = file($fichier, FILE_IGNORE_NEW_LINES);

            foreach ($etudiants as $etudiant) {
                $donnees = explode(",", $etudiant);
                echo"h";
                if (trim($donnees[0])===$nom && trim($donnees[1]) === $prenom && trim($donnees[4]) === $age) {
                echo"2";
                   
                    return true;
                } 
                else {return false;}
            }
        }else {return false;}
    }
}

