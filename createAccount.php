<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretooty, créer votre compte</title>
</head>

<body>
    <form action="signup.php" method="post">
        <label for="pseudo">Pseudonyme :</label>
        <input type="text" name="pseudo" required>

        <label for="mail">Adresse mail :</label>
        <input type="text" name="mail" required>

        <label for="mdp">Mot de passe :</label>
        <input type="text" name="mdp" required>

        <label for="confirm">Confirmer le mot de passe :</label>
        <input type="text" name="confirm" required>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>