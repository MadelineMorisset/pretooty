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
        <?php include('views/header.php');
        include("php/functions.php");
        $infoUser=showMyAccount(); ?>


        <main class="userContainer">
            <?php include('views/userNavbar.php'); ?>

            <form action="userEditPageAccount.php" method="post" class="userContainerForm">
                <div class="button40px squareButton generalModifyingButton"><i class="fa-solid fa-pencil fa-xl"></i></div> <!-- Bouton à venir et non fonctionnel -->
                <input type="submit" value="Modifier" class="squareButton generalModifyingButton generalModifyingButtonTemporary"/> <!-- Bouton temporaire mais fonctionnel -->

                <fieldset>
                    <legend id="general" class="title fontSize20px userContainerFormTitles">Général</legend>
                    <div class="userGeneralInformations separationLine2px">
                        <div class="userFormInnerContainer leftInnerContainer">
                            <div class="userFormCategory firstElement userFormElements">
                                <label for="category" class="title fontSize14px labelAccount">Catégorie :</label>
                                <input type="text" name="category" value="<?= $infoUser["nom_categorie_u"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                                <!-- <div class="button28px squareButton ModifyingElementButton">
                                    <i class="fa-solid fa-pencil fa-xl"></i>
                                </div> -->
                            </div>

                            <div class="userFormPseudonym secondElement userFormElements">
                                <label for="pseudo" class="title fontSize14px labelAccount">Pseudonyme :</label>
                                <input type="text" name="pseudo" value="<?= $infoUser["pseudonyme"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                            </div>
                        </div>

                        <div class="userFormInnerContainer rightInnerContainer">
                            <div class="userFormLastName firstElement userFormElements">
                                <label for="name" class="title fontSize14px labelAccount">Nom :</label>
                                <input type="text" name="name" value="<?= $infoUser["nom_utilisateur"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                                <!-- <div class="button28px squareButton ModifyingElementButton"><i class="fa-solid fa-pencil fa-xl"></i></div> -->
                            </div>

                            <div class="userFormFirstName secondElement userFormElements">
                                <label for="firstname" class="title fontSize14px labelAccount">Prénom :</label>
                                <input type="text" name="firstname" value="<?= $infoUser["prenom_utilisateur"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                                <!-- <div class="button28px squareButton ModifyingElementButton"><i class="fa-solid fa-pencil fa-xl"></i></div> -->
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend id="coordinates" class="title fontSize20px userContainerFormTitles">Coordonnées</legend>
                    <div class="userGeneralInformations separationLine2px">
                        <div class="userFormInnerContainer leftInnerContainer">
                            <div class="userFormAddress firstElement userFormElements">
                                <label for="address" class="title fontSize14px labelAccount">Adresse :</label>
                                <input type="text" name="address" value="<?= $infoUser["adresse"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                                <!-- <div class="button28px squareButton ModifyingElementButton"><i class="fa-solid fa-pencil fa-xl"></i></div> -->
                            </div>

                            <div class="userFormCity secondElement userFormElements">
                                <label for="city" class="title fontSize14px labelAccount">Ville :</label>
                                <input type="text" name="city" value="<?= $infoUser["ville"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                                <!-- <div class="button28px squareButton ModifyingElementButton"><i class="fa-solid fa-pencil fa-xl"></i></div> -->
                            </div>

                            <div class="userFormZipCode thirdElement userFormElements">
                                <label for="cp" class="title fontSize14px labelAccount">Code Postal :</label>
                                <input type="text" name="cp" value="<?= $infoUser["cp"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                                <!-- <div class="button28px squareButton ModifyingElementButton"><i class="fa-solid fa-pencil fa-xl"></i></div> -->
                            </div>
                        </div>

                        <div class="userFormInnerContainer rightInnerContainer">
                            <div class="userFormPhone firstElement userFormElements">
                                <label for="tel" class="title fontSize14px labelAccount">Téléphone :</label>
                                <input type="text" name="tel" value="<?= $infoUser["tel"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                                <!-- <div class="button28px squareButton ModifyingElementButton"><i class="fa-solid fa-pencil fa-xl"></i></div> -->
                            </div>

                            <div class="userFormMail secondElement userFormElements">
                                <label for="email" class="title fontSize14px labelAccount">Adresse mail :</label>
                                <input type="email" name="email" value="<?= $infoUser["mail"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                            </div>

                            <div class="userFormPassword thirdElement userFormElements">
                                <label for="mdp" class="title fontSize14px labelAccount">Mot de passe</label>
                                <!-- <div class="button28px squareButton ModifyingElementButton"><i class="fa-solid fa-pencil fa-xl"></i></div> -->
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend id="parameters" class="title fontSize20px userContainerFormTitles">Paramètres</legend>
                    <div class="separationLine2px"></div>

                    <div class="userGeneralInformations separationLine2px">
                        <div class="userFormInnerContainer leftInnerContainer">
                            <div class="userFormNotification firstElement userFormElements">
                                <div class="title fontSize14px labelAccount">Notifications</div>
                                <div class="notificationToggle"> <!-- Non fonctionnel -->
                                    <input type="checkbox" id="toggle" class="noficationCheckbox"/>
                                    <label for="toggle" class="noficationCheckboxLabel"></label>
                                </div>
                            </div>

                            <div class="userFormDeleteAccount secondElement userFormElements">
                                <label for="delete" class="title fontSize14px labelAccount">Supprimer mon compte</label>
                                <button type="button" class="button28px squareButton deleteAccount"><i class="fa-solid fa-trash-can"></i></button> <!-- Non fonctionnel -->
                                <!-- Javascript pour appeler la fonction deleteMyAccount(); -->
                            </div>
                        </div>

                        <div class="userFormInnerContainer rightInnerContainer">
                            <div class="userFormFontSize firstElement userFormElements">
                                <label for="police" class="title fontSize14px labelAccount">Taille de la police :</label>
                                <input type="text" name="police" value="<?= $infoUser["nom_taille"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                            </div>

                            <div class="userFormColorTheme secondElement userFormElements">
                                <label for="theme" class="title fontSize14px labelAccount">Thème couleur :</label>
                                <input type="text" name="theme" value="<?= $infoUser["nom_theme"]; ?>" readonly style="border: transparent" class="inputAccountInformations"/>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </main>

        <?php include('views/footer.php'); ?>
    </body>
</html>