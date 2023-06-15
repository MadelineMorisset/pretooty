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


        <form action="userEditPageAccount.php" method="post">
            <fieldset>
                <legend>Général</legend>

                <label for="category">Catégorie :</label>
                <input type="text" name="category" value=""/>

                <label for="pseudo">Pseudonyme :</label>
                <input type="text" name="pseudo" value=""/>

                <label for="name">Nom :</label>
                <input type="text" name="name" value=""/>

                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" value=""/>
            </fieldset>

            <fieldset>
                <legend>Coordonnées</legend>

                <label for="address">Adresse :</label>
                <input type="text" name="address" value=""/>

                <label for="city">Ville :</label>
                <input type="text" name="city" value=""/>

                <label for="cp">Code Postal :</label>
                <input type="text" name="cp" value=""/>

                <label for="tel">Téléphone :</label>
                <input type="text" name="tel" value=""/>

                <label for="email">Adresse mail :</label>
                <input type="email" name="email" value=""/>

                <label for="mdp">Mot de passe :</label>
                <input type="text" name="mdp" value=""/>
            </fieldset>

            <input type="submit" value="Modifier"/>
        </form>

            <div>
            <label for="id_font">Taille de la police</label>
                <select name="id_font">
                    <option value="1">Petite</option>
                    <option value="2">Moyenne</option>
                    <option value="3">Grande</option>
                    <option value="4">Très grande</option>
                </select>
            </div>

            <div>
            <label for="id_theme">Thème couleur</label>
                <select name="id_theme">
                    <option value="1">Pretooty</option>
                    <option value="2">Nuit</option>
                </select>
            </div>

        
        <?php include('views\footer.php'); ?>

    </body>
</html>                                                       