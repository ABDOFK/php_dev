<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
</head>
<body>
    <h2>Générer une table de multiplication</h2>
    <form action="" method="post">
        <label for="nombre" >Entrez un nombre :</label><br>
        <input type="number" id="nombre" name="nombre" required><br><br>

        <input type="submit" name="submit" value="Générer">
    </form>

    <?php
        if(isset($_POST["submit"])){

       
        $nombre = (int)$_POST['nombre'];

        echo "<h2>Table de multiplication de $nombre</h2>";
        echo "<table border='1'>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$nombre x $i = " . ($nombre * $i) . "</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
tailwind