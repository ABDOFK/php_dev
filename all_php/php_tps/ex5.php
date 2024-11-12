<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de la moyenne</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nom = $_POST['nom'];
        $note1 = $_POST['note1'];
        $note2 = $_POST['note2'];
        $note3 = $_POST['note3'];


        $moyenne = ($note1 + $note2 + $note3) / 3;


        echo "<h2>Résultat pour $nom</h2>";
        echo "Moyenne : " . $moyenne . "<br>";


        if ($moyenne >= 16) {
            echo "Appréciation : Très bien";
        } elseif ($moyenne >= 12) {
            echo "Appréciation : Bien";
        } elseif ($moyenne >= 10) {
            echo "Appréciation : Passable";
        } else {
            echo "Appréciation : Échec";
        }
    } else {

    ?>
        <form action="<?php htmlspecialchars("ex5.php") ; ?>" method="post">
            <label for="nom">Nom de l'étudiant :</label><br>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="note1">Note 1 :</label><br>
            <input type="number" id="note1" name="note1" min="0" max="20" required><br><br>

            <label for="note2">Note 2 :</label><br>
            <input type="number" id="note2" name="note2" min="0" max="20" required><br><br>

            <label for="note3">Note 3 :</label><br>
            <input type="number" id="note3" name="note3" min="0" max="20" required><br><br>

            <input type="submit" value="Envoyer">
        </form>
    <?php
    }
    ?>

</body>

</html>