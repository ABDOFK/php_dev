<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $correctUsername = "admin";
    $correctPassword = "1234";

    if ($username === $correctUsername && $password === $correctPassword) {
        echo "Connexion réussie. Bienvenue, $username!";
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
} else {
    ?>
    <h2>Authentification</h2>
    <form action="" method="post">
        <label for="username">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
    <?php
}
?>

</body>
</html>
