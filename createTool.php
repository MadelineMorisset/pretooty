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

                <div class="button40px squareButton calendarButtonBig"><i class="fa-solid fa-calendar-check fa-xl"></i></div> <!-- Bouton à venir et non fonctionnel -->
                <input type="button" value="Calendrier" class="squareButton calendarButtonBig calendarButtonBigTemporary"/> <!-- Bouton temporaire mais fonctionnel -->

                <div class="userContainerSections">
                    <div class="userFormInnerContainer leftInnerContainer">
                        <div class="toolName">
                            <label for="toolName" class="title fontSize13px createToolLabel">Nom de l'outil :</label>
                            <input type="text" name="toolName" value="" required class="inputCreateTool"/>
                        </div>

                        <div class="toolCategory">
                            <label for="toolCategory" class="title fontSize13px createToolLabel">Catégorie :</label>
                            <select name="toolCategory" required class="inputCreateTool">
                                <option value="">Veuillez choisir une catégorie</option>
                                <option value="1">Clé</option>
                                <option value="2">Couper</option>
                                <option value="3">Frapper</option>
                                <option value="4">Tracer</option>
                                <option value="5">Manutention</option>
                                <option value="6">Mesurer</option>
                                <option value="7">Poncer</option>
                                <option value="8">Jardiner</option>
                                <option value="9">Attacher</option>
                                <option value="10">Percer</option>
                                <option value="11">Pincert</option>
                                <option value="12">Equipement de protection individuelle</option>
                                <option value="13">Peindre</option>
                                <option value="14">Visser</option>
                                <option value="15">Souder</option>
                            </select>
                        </div>
                            
                        <div class="toolStatus">
                            <label for="toolStatus" class="title fontSize13px label">État :</label>
                            <div>
                                <input type="radio" name="toolStatus" value="6"/>
                                <label for="new">Neuf</label>
                                <input type="radio" name="toolStatus" value="5"/>
                                <label for="asNew">Comme neuf</label>
                                <input type="radio" name="toolStatus" value="4"/>
                                <label for="veryGood">Très bon</label>
                                <input type="radio" name="toolStatus" value="3"/>
                                <label for="good">Bon</label>
                                <input type="radio" name="toolStatus" value="2"/>
                                <label for="bad">Mauvais</label>
                                <input type="radio" name="toolStatus" value="1"/>
                                <label for="used">Usagé</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="userFormInnerContainer rightInnerContainer">
                        <label for="toolImage" class="title fontSize13px label">Photo de l'outil :</label>
                        <input type="file" name="toolImage" accept=".png,.jpg,.jpeg"/>
                        <!-- <div style="width:350px; height:224px;border:solid 1px black;"> </div> AFFICHAGE DE LA PHOTO A VOIR PLUS TARD-->
                    </div>
                </div>

                <div>
                    <label for="toolDescription" class="title fontSize13px label">Description :</label>
                    <input type="textarea" name="toolDescription" required/>
                </div>

                <div>
                    <label for="toolSecurity" class="title fontSize13px label">Consignes de sécurité :</label>
                    <input type="textarea" name="toolSecurity"/>
                </div>

                <div>
                    <label for="toolAccessories" class="title fontSize13px label">Accessoires fournis avec l'outil :</label>
                    <input type="textarea" name="toolAccessories"/>
                </div>

                <input type="submit" value="Valider"/>
                <a href="userPageActivities.php">Annuler</a>

            </form>
        </main>

        <?php include('views/footer.php'); ?>

    </body>
</html>