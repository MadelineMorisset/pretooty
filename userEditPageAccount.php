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
        <?php include('views\header.php'); ?>

        <form action="php/editAccount.php" method="post">
            <fieldset>
                <legend>Mes informations</legend>

                <label for="category">Catégorie :</label>
                    <select name="category">
                        <option value="1">Professionnel</option>
                        <option value="2">Particulier</option>
                    </select>

                <label for="name">Nom :</label>
                <input type="text" name="name" value=""/>

                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" value=""/>

                <label for="address">Adresse :</label>
                <input type="text" name="address" value=""/>

                <label for="city">Ville :</label>
                <input type="text" name="city" value=""/>

                <label for="cp">Code Postal :</label>
                <input type="text" name="cp" value=""/>

                <label for="tel">Téléphone :</label>
                <input type="text" name="tel" value=""/>

                <input type="submit" value="Valider"/>
                <a href="userPageAccount.php">Annuler</a>
            </fieldset>
        </form>










        <?php include('views\footer.php'); ?>

    </body>
</html>      