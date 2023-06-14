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
        <?php include('header.php'); ?>

        <?php include('functions.php');
        showMyAccountGeneral(); 
        showMyAccountContactDetails()?>

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


        <?php include('footer.php'); ?>

        <script src="assets\js\script.js"></script>
    </body>
</html>