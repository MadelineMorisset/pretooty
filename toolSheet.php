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
        include('php/functions.php');
        $tool = showToolSheet(); ?>

        <main>
            <section class="toolSheetContainer">
                <form class="toolSheetForm">
                    <section class="toolSheetFormTitle">
                        <h1><?= $tool['nom_outil'] ?></h1>

                        <section class="button40px squareButton toolSheetCalendarBigButton"><i class="fa-solid fa-calendar-check fa-xl"></i></section> <!-- Bouton à venir et non fonctionnel -->
                        <input type="button" value="Calendrier" class="squareButton toolSheetCalendarBigButton toolSheetCalendarBigButtonTemporary"/> <!-- Bouton temporaire mais fonctionnel -->
                    </section>

                    <section class="toolSheet">
                        <section class="toolSheetLeftSection">
                            <img src="./assets/img/tools/<?= $tool['photo'] ?>" alt="photo de l'outil" class="photoTool"/>
                        </section>

                        <section class="toolSheetRightSection">
                            <section class="toolSheetTopSection">
                                <section class="toolSheetTopLeftSection">
                                    <section class="toolSheetFirstInformations toolSheetCategory">
                                        <label for="toolCategory" class="title fontSize13px toolSheetLabel">Catégorie :</label>
                                        <input type="text" name="toolCategory" value="<?= $tool['nom_categorie'] ?>" style="border:transparent" class="text fontSize13px inputToolSheet"/>
                                    </section>

                                    <section class="toolSheetFirstInformations toolSheetLender">
                                        <label for="lender" class="title fontSize13px toolSheetLabel">Prêteur :</label>
                                        <input type="text" name="lender" value="<?= $tool['pseudonyme'] ?>" style="border:transparent" class="text fontSize13px inputToolSheet"/>
                                    </section>
                                </section>

                                <section class="toolSheetTopRightSection">
                                    <section class="toolSheetFirstInformations toolSheetStatus">
                                        <label for="toolSatus" class="title fontSize13px toolSheetLabel">Etat :</label>
                                        <input type="text" name="toolSatus" value="<?= $tool['nom_etat'] ?>" style="border:transparent" class="text fontSize13px inputToolSheet"/>
                                    </section>

                                    <section class="toolSheetFirstInformations toolSheetPlace">
                                        <label for="toolPlace" class="title fontSize13px toolSheetLabel">Lieu :</label>
                                        <input type="text" name="toolPlace" value="<?= $tool['ville'] ?> (<?= $tool['cp'] ?>)" style="border:transparent" class="text fontSize13px inputToolSheet"/>
                                    </section>
                                </section>
                        </section>

                        <section class="toolSheetBottomSection">
                            <section class="toolInformations">
                                <label for="toolDescription" class="title fontSize13px toolInformationsLabel">Description :</label>
                                <p name="toolDescription" id="toolDescription" class="text fontSize13px toolInputTextInformations"><?= $tool['description'] ?></p>
                            </section>

                            <section class="toolInformations">
                                <label for="toolSecurity" class="title fontSize13px toolInformationsLabel">Consignes de sécurité :</label>
                                <p name="toolSecurity" id="toolSecurity" class="text fontSize13px toolInputTextInformations"><?= $tool['consignes_securite'] ?></p>
                            </section>

                            <section class="toolInformations">
                                <label for="toolAccessories" class="title fontSize13px toolInformationsLabel">Accessoires fournis avec l'outil :</label>
                                <p name="toolAccessories" id="toolAccessories" class="text fontSize13px toolInputTextInformations"><?= $tool['accessoires'] ?></p>
                            </section>
                        </section>
                    </section>
                </form>
            </section>


            <section class="commentContainer">
                <section class="separationLineBottom2px">
                    <h1>Commentaires</h1>
                </section>
                <section class="commentsSection">
                    <section class="commentHeader">
                        <section class="title fontSize16px"><!-- [nameUser] à utilisé cet outil de : --></section>
                        <section class="text fontSize16px"><!-- ../../20.. --></section>
                        <section class="title fontSize16px"><!-- au --></section>
                        <section class="text fontSize16px"><!-- ../../20.. --></section>
                    </section>
                    <section class="commentText"><!-- Commentaire --></section>
                </section>
            </section>
        </main>

        <?php include('views/footer.php'); ?>

    </body>
</html>