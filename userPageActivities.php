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
        include('views\userNavbar.php'); 
        include("php/functions.php");
        $infoUser=showMyAccount(); ?>

        <main>

        <a href="createTool.php">Ajouter un outil</a>

        </main>

        <?php include('views\footer.php'); ?>

    </body>
</html>