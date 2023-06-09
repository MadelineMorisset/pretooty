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

        <title>Pretooty</title>
        <meta name="description" content="">
    </head>

    <body>
        <?php include('views/header.php'); ?>

        <main class="userMain">
            <?php include('views/userNavbar.php'); ?>

            <form action="./php/toolCreation.php" method="post" enctype="multipart/form-data" class="userContainer">

                <section class="button40px squareButton createToolCalendarBigButton"><i class="fa-solid fa-calendar-check fa-xl"></i></section> <!-- Bouton à venir et non fonctionnel -->
                <input type="button" value="Calendrier" class="squareButton createToolCalendarBigButton createToolCalendarBigButtonTemporary"/> <!-- Bouton temporaire mais fonctionnel -->

                <section class="userContainerSections">
                    <section class="userInnerContainer leftInnerContainer">
                        <section class="toolName">
                            <label for="toolName" class="title fontSize13px toolLabel">Nom de l'outil :</label>
                            <input type="text" name="toolName" value="" class="text fontSize13px inputCreateTool"/>
                        </section>

                        <section class="toolCategory">
                            <label for="toolCategory" class="title fontSize13px toolLabel">Catégorie :</label>
                            <select name="toolCategory" class="text fontSize13px inputCreateTool">
                                <option value="" class="text fontSize16px createToolCategories">Veuillez choisir une catégorie</option>
                                <option value="1" class="text fontSize16px createToolCategories">Clé</option>
                                <option value="2" class="text fontSize16px createToolCategories">Couper</option>
                                <option value="3" class="text fontSize16px createToolCategories">Frapper</option>
                                <option value="4" class="text fontSize16px createToolCategories">Tracer</option>
                                <option value="5" class="text fontSize16px createToolCategories">Manutention</option>
                                <option value="6" class="text fontSize16px createToolCategories">Mesurer</option>
                                <option value="7" class="text fontSize16px createToolCategories">Poncer</option>
                                <option value="8" class="text fontSize16px createToolCategories">Jardiner</option>
                                <option value="9" class="text fontSize16px createToolCategories">Attacher</option>
                                <option value="10" class="text fontSize16px createToolCategories">Percer</option>
                                <option value="11" class="text fontSize16px createToolCategories">Pincert</option>
                                <option value="12" class="text fontSize16px createToolCategories">Equipement de protection insectioniduelle</option>
                                <option value="13" class="text fontSize16px createToolCategories">Peindre</option>
                                <option value="14" class="text fontSize16px createToolCategories">Visser</option>
                                <option value="15" class="text fontSize16px createToolCategories">Souder</option>
                            </select>
                        </section>
                            
                        <section class="toolStatus">
                            <label for="toolStatus" class="title fontSize13px toolLabel">État :</label>
                            <section class="createToolStatus">
                                <section class="createToolStatusOptions">
                                    <input type="radio" name="toolStatus" value="6"/>
                                    <label for="new" class="text fontSize13px toolLabel">Neuf</label>
                                </section>

                                <section class="createToolStatusOptions">
                                    <input type="radio" name="toolStatus" value="5"/>
                                    <label for="asNew" class="text fontSize13px toolLabel">Comme neuf</label>
                                </section>

                                <section class="createToolStatusOptions">
                                    <input type="radio" name="toolStatus" value="4"/>
                                    <label for="veryGood" class="text fontSize13px toolLabel">Très bon</label>
                                </section>

                                <section class="createToolStatusOptions">
                                    <input type="radio" name="toolStatus" value="3"/>
                                    <label for="good" class="text fontSize13px toolLabel">Bon</label>
                                </section>

                                <section class="createToolStatusOptions">
                                    <input type="radio" name="toolStatus" value="2"/>
                                    <label for="bad" class="text fontSize13px toolLabel">Mauvais</label>
                                </section>

                                <section class="createToolStatusOptions">
                                    <input type="radio" name="toolStatus" value="1"/>
                                    <label for="used" class="text fontSize13px toolLabel">Usagé</label>
                                </section>
                            </section>
                        </section>
                    </section>
                    
                    <section class="userInnerContainer rightInnerContainer">
                        <section class="toolPhotoDownload">
                            <label for="toolImage" class="title fontSize13px toolLabel">Photo de l'outil :</label>
                            <input type="file" name="toolImage" accept=".png,.jpg,.jpeg" class="text fontSize13px inputPhotoDownload"/>
                        </section>
                        <section class="toolPhotoView">
                            <!-- <section></section> AFFICHAGE DE LA PHOTO A VOIR PLUS TARD -->
                        </section>
                    </section>
                </section>

                <section class="userContainerSections">
                    <section class="userToolInnerContainer">
                        <section class="toolInformations">
                            <label for="toolDescription" class="title fontSize13px toolInformationsLabel">Description :</label>
                            <textarea name="toolDescription" id="toolDescription" class="text fontSize13px toolTextArea"></textarea>
                        </section>

                        <section class="toolInformations">
                            <label for="toolSecurity" class="title fontSize13px toolInformationsLabel">Consignes de sécurité :</label>
                            <textarea name="toolSecurity" id="toolSecurity" class="text fontSize13px toolTextArea"></textarea>
                        </section>

                        <section class="toolInformations">
                            <label for="toolAccessories" class="title fontSize13px toolInformationsLabel">Accessoires fournis avec l'outil :</label>
                            <textarea name="toolAccessories" id="toolAccessories" class="text fontSize13px toolTextArea"></textarea>
                        </section>
                    </section>
                </section>

                <section class="userContainerButtons">
                    <section class="userToolButtons">
                        <!-- <a href="userPageActivities.php"><button class="title fontSize13px button115px35px">Annuler</button></a> -->

                        <button type="submit" class="title fontSize13px button115px35px">Valider</button>
                    </section>
                </section>

            </form>
        </main>

        <?php include('views/footer.php'); ?>

    </body>
</html>