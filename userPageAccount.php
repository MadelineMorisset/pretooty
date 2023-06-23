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

        <title>Pretooty</title>
        <meta name="description" content="">
    </head>

    <body>
        <?php include('views/header.php');
        include("php/functions.php");
        $infoUser=showMyAccount(); ?>


        <main class="userContainer">
            <?php include('views/userNavbar.php'); ?>

            <form action="userEditPageAccount.php" method="post" class="userContainerForm">
                <fieldset>
                    <legend id="general">Général</legend>

                    <label for="category">Catégorie :</label>
                    <input type="text" name="category" value="<?= $infoUser["nom_categorie_u"]; ?>" readonly style="border: transparent"/>

                    <label for="pseudo">Pseudonyme :</label>
                    <input type="text" name="pseudo" value="<?= $infoUser["pseudonyme"]; ?>" readonly style="border: transparent"/>

                    <label for="name">Nom :</label>
                    <input type="text" name="name" value="<?= $infoUser["nom_utilisateur"]; ?>" readonly style="border: transparent"/>

                    <label for="firstname">Prénom :</label>
                    <input type="text" name="firstname" value="<?= $infoUser["prenom_utilisateur"]; ?>" readonly style="border: transparent"/>
                </fieldset>

                <fieldset>
                    <legend id="coordinates">Coordonnées</legend>

                    <label for="address">Adresse :</label>
                    <input type="text" name="address" value="<?= $infoUser["adresse"]; ?>" readonly style="border: transparent"/>

                    <label for="city">Ville :</label>
                    <input type="text" name="city" value="<?= $infoUser["ville"]; ?>" readonly style="border: transparent"/>

                    <label for="cp">Code Postal :</label>
                    <input type="text" name="cp" value="<?= $infoUser["cp"]; ?>" readonly style="border: transparent"/>

                    <label for="tel">Téléphone :</label>
                    <input type="text" name="tel" value="<?= $infoUser["tel"]; ?>" readonly style="border: transparent"/>

                    <label for="email">Adresse mail :</label>
                    <input type="email" name="email" value="<?= $infoUser["mail"]; ?>" readonly style="border: transparent"/>

                    <label for="mdp">Mot de passe</label>
                
                </fieldset>

                <fieldset>
                    <legend id="parameters">Paramètres</legend>

                    <div>Notifications</div>

                    <label for="delete">Supprimer mon compte</label>
                    <input type="button" name="delete" value="Supprimer"/>   
                    <!-- Javascript pour appeler la fonction deleteMyAccount(); -->

                    <label for="police">Taille de la police</label>
                    <input type="text" name="police" value="<?= $infoUser["nom_taille"]; ?>" readonly style="border: transparent"/>

                    <label for="theme">Thème couleur</label>
                    <input type="text" name="theme" value="<?= $infoUser["nom_theme"]; ?>" readonly style="border: transparent"/>
                </fieldset>

            <input type="submit" value="Modifier"/>
            </form>
        </main>

        
        <?php include('views/footer.php'); ?>

    </body>
</html>