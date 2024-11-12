<?php
function rechercher_etudiant($nom, $prenom, $date_de_naissance)
{
    $niveaux = ["niveau_1ere annee.txt", "niveau_2ere annee.txt", "niveau_3ere annee.txt"];

    foreach ($niveaux as $fichier) {
        if (file_exists($fichier)) {
            $etudiants = file($fichier, FILE_IGNORE_NEW_LINES);
            
            foreach ($etudiants as $etudiant) {
                $donnees = explode(",", $etudiant);

                // echo "<br> nom:($nom=$donnees[0]) " . (trim($donnees[0]) == trim($nom) ? "Match" : "No match");
                // echo strlen($nom);
                // echo strlen($donnees[0]);
                // echo "<br>  prenom: " . (trim($donnees[1]) === $prenom ? "Match" : "No match");
                
                // echo "<br> date_de_naissance: " . (trim($donnees[4]) === $date_de_naissance ? "Match" : "No match");
                
                if (trim($donnees[0]) === trim($nom) && trim($donnees[1]) === trim($prenom) && trim($donnees[4]) === trim($date_de_naissance)) {
                    return true; 
                }
            }
        }
    }
    
    return false; 
}
