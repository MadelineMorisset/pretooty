<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pretooty, demande de réinitialisation du mot de passe</title>
    </head>

    <body>
        <?php include('header.php'); ?>

        <form action="mailInitPassword.php" method="post">
            <input type="email" name="mail" placeholder="Votre adresse mail" required>
            <button type="submit">Envoyer</button>

            <a href="login.php">Retour vers connexion</a>
            <a href="createAccount.php">Retour vers création de compte</a>
        </form>

        <?php include('footer.php'); ?>
    </body>
</html>