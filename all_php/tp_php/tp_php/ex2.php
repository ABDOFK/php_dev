<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <?php
    include("ex3.php");
    include("ex4.php");
    include("ex5.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $erreurs = [];

        if (!isset($_POST['Nom']) || empty(trim($_POST['Nom']))) {
            $erreurs[] = "Le champ 'Nom' est requis.";
        }
        if (!isset($_POST['Prenom']) || empty(trim($_POST['Prenom']))) {
            $erreurs[] = "Le champ 'Prénom' est requis.";
        }
        if (!isset($_POST['Date_de_naissance']) || empty(trim($_POST['Date_de_naissance']))) {
            $erreurs[] = "Le champ 'Date de naissance' est requis.";
        }
        if (!isset($_POST['Email']) || empty(trim($_POST['Email']))) {
            $erreurs[] = "Le champ 'Email' est requis.";
        }
        if (!isset($_POST['Numero_de_telephone']) || empty(trim($_POST['Numero_de_telephone']))) {
            $erreurs[] = "Le champ 'Numéro de téléphone' est requis.";
        }
        if (!isset($_POST['Niveau']) || empty(trim($_POST['Niveau']))) {
            $erreurs[] = "Le champ 'Niveau' est requis.";
        }

        if (empty($erreurs)) {
            $nom = htmlspecialchars($_POST['Nom']);
            $prenom = htmlspecialchars($_POST['Prenom']);
            $date_de_naissance = $_POST['Date_de_naissance'];
            $email = htmlspecialchars($_POST['Email']);
            $telephone = htmlspecialchars($_POST['Numero_de_telephone']);
            $niveau = htmlspecialchars($_POST['Niveau']);
            
            $age = calculer_age($date_de_naissance);

            echo "<div class='mt-4 p-4 bg-green-100 text-green-800 rounded'>";
            echo "Bienvenue, <strong>$prenom $nom</strong>!<br>Vous avez <strong>$age ans</strong>.<br>";
            
            enregistrer_etudiant($nom, $prenom, $email, $telephone, $age, $niveau);
            echo "Les informations ont été enregistrées dans <strong>niveau_$niveau.txt</strong>.";
            echo "</div>";

            echo "<div class='max-w-6xl mx-auto p-4'>";
            afficher_etudiants_par_niveau(1);
            afficher_etudiants_par_niveau(2);
            afficher_etudiants_par_niveau(3);
            echo "</div>";

        } else {
            echo "<div class='mt-4 p-4 bg-red-100 text-red-800 rounded'>";
            echo "<p>Erreur : Veuillez compléter tous les champs du formulaire.</p>";
            echo "<ul class='list-disc list-inside'>";
            foreach ($erreurs as $erreur) {
                echo "<li>$erreur</li>";
            }
            echo "</ul>";
            echo "</div>";
        }

    }
    ?>
</body>
</html>
