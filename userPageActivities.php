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
        include("php/functions.php"); ?>

        <main class="userMain">
            <?php include('views/userNavbar.php'); ?>

            <section class="userContainer">
                <section class="userContainerSections">
                    <section class="userTitleSections">
                        <h1 class="title fontSize20px userContainerTitles">Mes outils</h1>

                    </section>
                    <section class="userInnerSections separationLineTop2px">
                        <?php showMyTools(); ?>
                    </section>
                    <a href="createTool.php">Ajouter un outil</a>
                </section>

                <section class="userContainerSections">
                    <section class="userTitleSections">
                        <h1 class="title fontSize20px userContainerTitles">Mes prêts</h1>

                    </section>
                    <section class="userInnerSections separationLineTop2px">
                        <?php showMyTools(); ?>
                    </section>
                    <a href="createTool.php">Ajouter un outil</a>
                </section>
 
                <section class="userContainerSections">
                    <section class="userTitleSections">
                        <h1 class="title fontSize20px userContainerTitles">Mes emprunts</h1>

                        <section class="filter" onClick="navHidden()">
                            <section class="button40px squareButton"><i class="fa-solid fa-user fa-xl"></i></section>

                            <section id="navHidden" class="visibilityNav">
                                <section class="navUserLogin titleBox separationHorizontalLine1px">
                                <a href="loginAccount.php" class="title titleHeader fontSize12px">Me connecter / M’inscrire</a>
                                </section>

                                <section class="navUserAccount titleBox separationHorizontalLine1px">
                                <a href="userPageAccount.php" class="navUserAccountLinks title titleHeader fontSize12px">Mon compte</a>
                                <a href="userPageActivities.php" class="navUserAccountLinks title titleHeader fontSize12px">Mes activités</a>
                                <a href="userMessaging.php" class="navUserAccountLinks title titleHeader fontSize12px">Ma messagerie</a>
                                </section>

                                <section class="navUserLogout titleBox">
                                <a href="php/logout.php" class="title titleHeader fontSize12px">Me déconnecter</a>
                                </section>
                            </section>
                        </section> 
                    </section>
                    <section class="userInnerSections separationLineTop2px">
                        <?php showMyTools(); ?>
                    </section>
                </section>
            </section>
        </main>

        <?php include('views\footer.php'); ?>

    </body>
</html>