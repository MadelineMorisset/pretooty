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
        <?php include("views/header.php");
        include('php/functions.php');
        $infoUser=showMyAccount(); ?>

        <main>
            <form action="php/editAccount.php" method="post">
                <fieldset>
                    <legend>Mes informations</legend>

                    <label for="category">Catégorie :</label>
                        <select name="category">
                            <option value="1" <?php if ($infoUser["category"]=1) {echo "selected";} ?> >Professionnel</option>
                            <option value="2" <?php if ($infoUser["category"]=2) {echo "selected";} ?> >Particulier</option>
                        </select>

                    <label for="name">Nom :</label>
                    <input type="text" name="name" value="<?= $infoUser["nom_utilisateur"]; ?>"/>

                    <label for="firstname">Prénom :</label>
                    <input type="text" name="firstname" value="<?= $infoUser["prenom_utilisateur"]; ?>"/>

                    <label for="address">Adresse :</label>
                    <input type="text" name="address" value="<?= $infoUser["adresse"]; ?>"/>

                    <label for="city">Ville :</label>
                    <input type="text" name="city" value="<?= $infoUser["ville"]; ?>"/>

                    <label for="cp">Code Postal :</label>
                    <input type="text" name="cp" value="<?= $infoUser["cp"]; ?>"/>

                    <label for="tel">Téléphone :</label>
                    <input type="text" name="tel" value="<?= $infoUser["tel"]; ?>"/>
                </fieldset>

                <fieldset>
                    <legend>Mot de passe</legend>

                    <label for="currentmdp">Mot de passe actuel</label>
                    <input type="password" name="currentmdp"/>

                    <label for="newmdp">Nouveau mot de passe</label>
                    <input type="password" name="newmdp"/>

                    <label for="confirm">Confirmer le nouveau mot de passe</label>
                    <input type="password" name="confirm"/>
                </fieldset>

                <fieldset>
                    <legend>Paramètres</legend>

                    <label for="id_font">Taille de la police</label>
                    <select name="id_font">
                        <option value="1" <?php if ($infoUser["id_police"]==1) {echo "selected";} ?> >Petite</option>
                        <option value="2" <?php if ($infoUser["id_police"]==2) {echo "selected";} ?> >Moyenne</option>
                        <option value="3" <?php if ($infoUser["id_police"]==3) {echo "selected";} ?> >Grande</option>
                        <option value="4" <?php if ($infoUser["id_police"]==4) {echo "selected";} ?> >Très grande</option>
                </select>

                    <label for="id_theme">Thème couleur</label>
                    <select name="id_theme">
                        <option value="1" <?php if ($infoUser["id_theme"]==1) {echo "selected";} ?> >Pretooty</option>
                        <option value="2" <?php if ($infoUser["id_theme"]==2) {echo "selected";} ?> >Nuit</option>
                    </select>
                </fieldset>

                <input type="submit" value="Valider"/>
                <a href="userPageAccount.php">Annuler</a>
            </form>
        </main>

        <?php include("views/footer.php"); ?>
    </body>
</html>      