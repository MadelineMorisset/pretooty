<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora&family=Merriweather:wght@700&display=swap" rel="stylesheet"><!-- Titles' Font : "Merriweather" / Texts' Font : "Lora" -->
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/23c1a897ea.js" crossorigin="anonymous"></script>
        <!-- JavaScript -->
        <script src="assets/js/script.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>

        <title>Pretooty</title>
        <meta name="description" content="">
    </head>

    <body>
        <?php include('views/header.php'); ?>

        <main class="connectionAndCreationAccount">
            <!-- Formulaire de connexion -->
            <div class="signInContainer">
                <h2 class="title title24px titleConnection">Connexion</h2>

                <div class="otherConnections">
                    <div class="googleSignIn"></div>
                    <div class="appleSignIn"></div>
                </div>

                <p class="text fontSize20px textConnection">Identifiants personnels</p>
                <form action="php/login.php" method="post" class="formConnection">
                    <div class="identification">
                        <div class="pseudoEmail">
                            <label for="pseudoMail" class="title fontSize13px label">Pseudo / Adresse mail :</label>
                            <input type="text" name="pseudoMail" required class="inputLoginAccount">
                        </div>

                        <div class="password">
                            <label for="mdp" class="title fontSize13px label">Mot de passe :</label>
                            <input type="password" name="mdp" required class="inputLoginAccount">
                            <a href="forgottenPassword_mail.php" class="text fontSize14px forgottenPasswordLink">Mot de passe oublié ?</a>
                        </div>
                    </div>

                    <div class="connection">
                        <button type="submit" class="title fontSize13px button115px35px">Se connecter</button>
                        <a href="createAccount.php" class="text fontSize14px notMemberLink">Pas encore membre ?</a>
                    </div>
                </form>
            </div>
        </main>

        <?php include('views/footer.php'); ?>

    </body>

</html>