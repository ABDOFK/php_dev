<?php
include("test_etudiants.php");

function enregistrer_etudiant($nom, $prenom, $email, $telephone, $age, $niveau)
{
    $filename = "niveau_$niveau.txt";
    $etudiant = implode(',', [$nom, $prenom, $email, $telephone, $age]) . "\n";

    $etudiant_trouve = rechercher_etudiant($nom, $prenom, $age);

    if ($etudiant_trouve) {
        return false;
    } else {
        file_put_contents($filename, $etudiant, FILE_APPEND);
        return true;
    }
}
?>
