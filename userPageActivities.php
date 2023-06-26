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
        <title>Pretooty, Mon compte</title>
    </head>

    <body>
        <?php include('views\header.php');
        include('views\userNavbar.php'); 
        include("php/functions.php"); ?>

        <main>

            <section>
                <h1>Mes outils</h1>
                <?php showMyTools(); ?>
                <a href="createTool.php">Ajouter un outil</a>
            </section>



        </main>

        <?php include('views\footer.php'); ?>

    </body>
</html>