<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Pretooty, Mon compte</title>
    </head>

    <body>
        <?php include('views\header.php'); 
        include('php/functions.php');
        $infoUser=showMyAccount(); ?>


        <main>

            <form action="php/editAccount.php" method="post">
                <fieldset>
                    <legend>Mes informations</legend>

                    <label for="category">Catégorie :</label>
                        <select name="category">
                            <option value="1">Professionnel</option>
                            <option value="2">Particulier</option>
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

                    <input type="submit" value="Valider"/>
                    <a href="userPageAccount.php">Annuler</a>
                </fieldset>
            </form>

        </main>










        <?php include('views\footer.php'); ?>

    </body>
</html>      