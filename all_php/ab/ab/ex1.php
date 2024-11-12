<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg bg-white shadow-md rounded-lg p-8">
        <form action="<?php echo htmlspecialchars('ex2.php'); ?>" method="post">

            <div class="mb-4">
                <label for="Nom" class="block text-gray-700 font-semibold mb-2">Nom</label>
                <input type="text" name="Nom" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            <div class="mb-4">
                <label for="Prenom" class="block text-gray-700 font-semibold mb-2">Prenom</label>
                <input type="text" name="Prenom" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            <div class="mb-4">
                <label for="Date de naissance" class="block text-gray-700 font-semibold mb-2">Date de naissance</label>
                <input type="date" name="Date_de_naissance" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            <div class="mb-4">
                <label for="Email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" name="Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            <div class="mb-4">
                <label for="Numero de telephone" class="block text-gray-700 font-semibold mb-2">Numero de telephone</label>
                <input type="tel" name="Numero_de_telephone" value="+212" pattern="^\+212\d{9}$" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            <div class="mb-4">
                <label for="Niveau" class="block text-gray-700 font-semibold mb-2">Niveau</label>
                <select name="Niveau" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
                    <option value="1ere annee">1ere annee</option>
                    <option value="2eme annee">2eme annee</option>
                    <option value="3eme annee">3eme annee</option>
                </select>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>

</html>