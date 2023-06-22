<!DOCTYPE html>
 <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pretooty, Réinitialisation du mot de passe</title>
    </head>

    <body>
        <?php include('views/header.php'); ?>

        <form action="php\setNewPassword.php" method="post">
            <input type="password" name="mdp" placeholder="Mot de passe" required>
            <input type="password" name="confirm" placeholder="Confirmer mot de passe" required>

            <button type="submit">Envoyer</button>

            <a href="loginAccount.php">Retour vers connexion</a>
            <a href="createAccount.php">Retour vers création de compte</a>
        </form>

    <?php include('views/footer.php'); ?>
    </body>
</html>