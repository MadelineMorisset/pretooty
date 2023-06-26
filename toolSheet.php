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
        <title>Pretooty, Création fiche outil</title>
    </head>

    <body>
        <?php include('views\header.php');
        include('views\userNavbar.php'); ?>

        <main>
            <form action="" method="post">

                <img src="" alt="photo de l'outil"/>

                <label for="toolCategory">Catégorie :</label>
                <input type="text" name="toolCategory" value=""/>

                <label for="lender">Prêteur :</label>
                <input type="text" name="lender" value=""/>

                <label for="toolSatus">Etat :</label>
                <input type="text" name="toolSatus" value=""/>

                <label for="toolPlace">Lieu :</label>
                <input type="text" name="toolPlace" value=""/>

                <label for="toolDescription">Description :</label>
                <input type="text" name="toolDescription" value=""/>

                <label for="toolSecurity">Consignes de sécurité :</label>
                <input type="text" name="toolSecurity" value=""/>

                <label for="toolAccessories">Accessoires fournis avec l'outil :</label>
                <input type="text" name="toolAccessories" value=""/>

                <div>
                    <input type="button" value="Calendrier"/>
                </div>

            </form>
        </main>

        <?php include('views\footer.php'); ?>

    </body>
</html>