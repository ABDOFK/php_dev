<?php
include("test_etudiants.php");

function enregistrer_etudiant($nom, $prenom, $email, $telephone,  $date_de_naissance, $niveau)
{
    $filename = "niveau_$niveau.txt";
    $etudiant = implode(',', [$nom, $prenom, $email, $telephone,  $date_de_naissance]) . "\n";

    $etudiant_trouve = rechercher_etudiant($nom, $prenom,  $date_de_naissance);
    // var_dump($etudiant_trouve);

    if ($etudiant_trouve) {
        return false;
    } else {
        file_put_contents($filename, $etudiant, FILE_APPEND);
        return true;
    }
}
?>
