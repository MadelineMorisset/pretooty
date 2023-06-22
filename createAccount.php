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
                <h2 class="title title24px titleConnection">Créer un compte</h2>

                <div class="otherConnections">
                    <div class="googleSignIn"></div>
                    <div class="appleSignIn"></div>
                </div>

                <p class="text text20px textConnection">Identifiants personnels</p>
                <form action="php/signup.php" method="post" class="formConnection">
                    <div class="identification">
                        <div class="pseudo">
                            <label for="pseudo" class="title title16px label">Pseudonyme* :</label>
                            <input type="text" name="pseudo" required class="input">
                        </div>

                        <div class="email">
                            <label for="mail" class="title title16px label">Adresse mail* :</label>
                            <input type="email" name="mail" required class="input">
                        </div>

                        <div class="password">
                            <label for="mdp" class="title title16px label">Mot de passe* :</label>
                            <input type="password" name="mdp" required class="input">
                        </div>

                        <div class="confirmPassword">
                            <label for="confirm" class="title title16px label">Confirmer le mot de passe* :</label>
                            <input type="password" name="confirm" required class="input">
                        </div>
                    </div>

                    <div class="requiredCharacters">
                        <h3>Caractères requis :</h3>
                        <ul>
                            <li>Minimum 6 caractères</li>
                            <li>Majuscules</li>
                            <li>Minuscules</li>
                            <li>Chiffres</li>
                        </ul>
                    </div>

                    <div class="connection">
                        <button type="submit" class="title title16px connectButton">Se connecter</button>
                    </div>
                </form>
            </div>
        </main>

        <?php include('views/footer.php'); ?>
    </body>
</html>