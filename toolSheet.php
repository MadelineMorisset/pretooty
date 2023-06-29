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
        <?php include('views/header.php');
        // include('views/userNavbar.php');
        include('php/functions.php');
        $tool = showToolSheet(); ?>

        <main>
            <form>

                <h1><?= $tool['nom_outil'] ?></h1>

                <img src="./assets/img/tools/<?= $tool['photo'] ?>" alt="photo de l'outil"/>

                <label for="toolCategory">Catégorie :</label>
                <input type="text" name="toolCategory" value="<?= $tool['nom_categorie'] ?>" style="border:transparent"/>

                <label for="lender">Prêteur :</label>
                <input type="text" name="lender" value="<?= $tool['pseudonyme'] ?>" style="border:transparent"/>

                <label for="toolSatus">Etat :</label>
                <input type="text" name="toolSatus" value="<?= $tool['nom_etat'] ?>" style="border:transparent"/>

                <label for="toolPlace">Lieu :</label>
                <input type="text" name="toolPlace" value="<?= $tool['ville'] ?>" style="border:transparent"/>



                <label for="toolDescription">Description :</label>
                <input type="text" name="toolDescription" value="<?= $tool['description'] ?>" style="border:transparent"/>

                <label for="toolSecurity">Consignes de sécurité :</label>
                <input type="text" name="toolSecurity" value="<?= $tool['consignes_securite'] ?>" style="border:transparent"/>

                <label for="toolAccessories">Accessoires fournis avec l'outil :</label>
                <input type="text" name="toolAccessories" value="<?= $tool['accessoires'] ?>" style="border:transparent"/>

                <div>
                    <input type="button" value="Calendrier"/>
                </div>

            </form>


            <section>
                <h1>Commentaires</h1>
            </section>
        </main>

        <?php include('views/footer.php'); ?>

    </body>
</html>