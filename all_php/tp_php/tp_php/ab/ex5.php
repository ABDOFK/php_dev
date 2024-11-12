<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Étudiants par Niveau</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center p-6">

    <div class="w-full max-w-2xl">
        <h1 class="text-3xl font-bold text-center text-gray-800 mt-8 mb-6">Liste des Étudiants par Niveau</h1>

        <form method="POST" action="" class="mt-8 p-6 bg-white rounded-lg shadow-md">
            <div class="mb-6">
                <label for="Niveau" class="block text-gray-700 font-medium mb-2">Niveau</label>
                <select name="Niveau" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400" required>
                    <option value="1ere annee">1ère année</option>
                    <option value="2eme annee">2ème année</option>
                    <option value="3eme annee">3ème année</option>
                </select>
            </div>
            <button type="submit" class="w-full p-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md transition duration-200">Afficher la liste</button>
        </form>

        <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Niveau'])) {
                $niveau = $_POST['Niveau'];
                afficher_etudiants_par_niveau($niveau);
            }

            function afficher_etudiants_par_niveau($niveau) {
                $filename = "niveau_$niveau.txt";

                if (file_exists($filename)) {
                    $students = file($filename, FILE_IGNORE_NEW_LINES);

                    echo "<h2 class='text-2xl font-bold text-gray-800 mt-8'>Niveau $niveau</h2>";
                    echo "<table class='w-full mt-4 bg-white border border-gray-200 rounded-lg shadow-sm'>
                            <thead>
                                <tr class='bg-gray-100'>
                                    <th class='px-4 py-3 border-b font-semibold text-gray-700'>Nom</th>
                                    <th class='px-4 py-3 border-b font-semibold text-gray-700'>Prénom</th>
                                    <th class='px-4 py-3 border-b font-semibold text-gray-700'>Email</th>
                                    <th class='px-4 py-3 border-b font-semibold text-gray-700'>Téléphone</th>
                                    <th class='px-4 py-3 border-b font-semibold text-gray-700'>Âge</th>
                                </tr>
                            </thead>
                            <tbody>";

                    foreach ($students as $student) {
                        $student_data = explode(",", $student);

                        if (count($student_data) == 5) {
                            list($nom, $prenom, $email, $telephone, $age) = array_map('trim', $student_data);

                            echo "<tr class='text-center border-b hover:bg-gray-50'>";
                            echo "<td class='px-4 py-2'>$nom</td>";
                            echo "<td class='px-4 py-2'>$prenom</td>";
                            echo "<td class='px-4 py-2'>$email</td>";
                            echo "<td class='px-4 py-2'>$telephone</td>";
                            echo "<td class='px-4 py-2'>$age</td>";
                            echo "</tr>";
                        }
                    }

                    echo "</tbody>
                          </table>";

                    echo "<p class='mt-6 text-lg text-gray-700'>Nombre total d'étudiants inscrits dans le niveau $niveau : <strong class='font-semibold'>" . count($students) . "</strong></p>";
                } else {
                    echo "<p class='mt-6 text-lg text-red-600'>Il n'y a pas d'étudiants inscrits dans le niveau $niveau.</p>";
                }
            }
            ?>
        </div>
    </div>

</body>
</html>
