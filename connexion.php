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
            <label for="pseudo" required>Pseudo / Adresse mail :</label>
            <input type="text" name="pseudo">

            <label for="mdp" required>Mot de passe :</label>
            <input type="text" name="mdp">
            <button type="submit">Se connecter</button>
        </form>

    <?php } 
        else { ?>

        <!-- Bonjour pseudo -->

        <h1><?php echo 'Bonjour '.$_SESSION['pseudonyme'].' !'; ?></h1>
        <!-- <h2>Bienvenue sur votre espace personnel.</h2> -->

    <?php } ?>

</body>

</html>