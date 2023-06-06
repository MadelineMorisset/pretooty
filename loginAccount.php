<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <?php if (!isset($_SESSION['pseudonyme'])) { ?>

        <!-- Formulaire de connexion -->

        <form action="login.php" method="post">
            <label for="pseudoMail">Pseudo / Adresse mail :</label>
            <input type="text" name="pseudoMail" required>

            <label for="mdp">Mot de passe :</label>
            <input type="text" name="mdp" required>
            <a href="forgottenPassword_mail.php">Mot de passe oublié ?</a>

            <button type="submit">Se connecter</button>
            <a href="createAccount.php">Pas encore membre ?</a>
        </form>

    <?php } ?>

</body>

</html>