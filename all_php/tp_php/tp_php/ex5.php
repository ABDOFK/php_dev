<?php
function afficher_etudiants_par_niveau($niveau) {
    $filename = "niveau_$niveau.txt";

    if (file_exists($filename)) {
        $students = file($filename, FILE_IGNORE_NEW_LINES);
        
        echo "<h2 class='text-xl font-semibold mt-6'>Niveau $niveau</h2>";
        echo "<table class='min-w-full table-auto border-collapse'>
                <thead>
                    <tr class='bg-gray-200'>
                        <th class='border px-4 py-2'>Nom</th>
                        <th class='border px-4 py-2'>Prénom</th>
                        <th class='border px-4 py-2'>Email</th>
                        <th class='border px-4 py-2'>Téléphone</th>
                        <th class='border px-4 py-2'>Âge</th>
                    </tr>
                </thead>
                <tbody>";

        foreach ($students as $student) {
            $student_data = explode(",", $student);
            
            if (count($student_data) == 5) {
                list($nom, $prenom, $email, $telephone, $age) = array_map('trim', $student_data);

                echo "<tr>";
                echo "<td class='border px-4 py-2'>$nom</td>";
                echo "<td class='border px-4 py-2'>$prenom</td>";
                echo "<td class='border px-4 py-2'>$email</td>";
                echo "<td class='border px-4 py-2'>$telephone</td>";
                echo "<td class='border px-4 py-2'>$age</td>";
                echo "</tr>";
            }
        }

        echo "</tbody>
              </table>";

        echo "<p class='mt-4 text-lg'>Nombre total d'étudiants inscrits dans le niveau $niveau : <strong>" . count($students) . "</strong></p>";
    } else {
        echo "<p class='mt-4 text-red-600'>Il n'y a pas d'étudiants inscrits dans le niveau $niveau.</p>";
    }
}
?>
