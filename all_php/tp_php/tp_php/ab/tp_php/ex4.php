<?php
function enregistrer_etudiant($nom, $prenom, $email, $telephone, $age, $niveau) {
    $filename = "niveau_$niveau.txt";
    $etudiant = "$nom, $prenom, $email, $telephone, $age\n";
    
    file_put_contents($filename, $etudiant, FILE_APPEND);
}


        
      

 
?>
