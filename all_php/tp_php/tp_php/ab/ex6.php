<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'un Étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center p-6">
    <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Recherche d'un Étudiant</h1>

        <form method="POST" action="" class="mb-6">
            <div class="mb-4">
                <label for="nom" class="block text-gray-700 font-medium mb-2">Nom</label>
                <input type="text" name="nom" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>
            <div class="mb-4">
                <label for="prenom" class="block text-gray-700 font-medium mb-2">Prénom</label>
                <input type="text" name="prenom" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>
            <button type="submit" class="w-full p-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md transition duration-200">Rechercher</button>
        </form>

        <?php
        function rechercher_etudiant($nom, $prenom) {
            $niveaux = ["niveau_1ere annee.txt", "niveau_2ere annee.txt", "niveau_3ere annee.txt"];

            foreach ($niveaux as $fichier) {
                if (file_exists($fichier)) {
                    $etudiants = file($fichier, FILE_IGNORE_NEW_LINES);

                    foreach ($etudiants as $etudiant) {
                        $donnees = explode(",", $etudiant);

                        if (trim($donnees[0]) === $nom && trim($donnees[1]) === $prenom) {
                            return true;
                        }
                    }
                }
            }
            return false; 
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = trim($_POST['nom']);
            $prenom = trim($_POST['prenom']);

            $etudiant_trouve = rechercher_etudiant($nom, $prenom);

            if ($etudiant_trouve) {
                echo "<p class='text-green-600 text-lg font-medium'>L'étudiant $prenom $nom est inscrit.</p>";
            } else {
                echo "<p class='text-red-600 text-lg font-medium'>L'étudiant $prenom $nom n'est pas inscrit.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
