<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Pretooty, Création fiche outil</title>
    </head>

    <body>
        <?php include('views\header.php'); ?>

        <main>
            <form action="./php/toolCreation.php" method="post">
                <div>
                    <label for="toolName">Nom de l'outil</label>
                    <input type="text" name="toolName" value="" required/>

                    <label for="toolCategory">Catégorie :</label>
                        <select name="toolCategory" required>
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
                    
                    <label for="toolStatus">Etat :</label>
                        <input type="radio" name="toolStatus" value="new"/>
                        <label for="new">Neuf</label>
                        <input type="radio" name="toolStatus" value="asNew"/>
                        <label for="asNew">Comme neuf</label>
                        <input type="radio" name="toolStatus" value="veryGood"/>
                        <label for="veryGood">Très bon</label>
                        <input type="radio" name="toolStatus" value="good"/>
                        <label for="good">Bon</label>
                        <input type="radio" name="toolStatus" value="bad"/>
                        <label for="bad">Mauvais</label>
                        <input type="radio" name="toolStatus" value="used"/>
                        <label for="used">Usagé</label>
                </div>

                <div>
                    <label for="toolImage">Photode l'outil :</label>
                    <input type="file" name="toolImage" accept=".png,.jpg,.jpeg"/>
                    <div style="width:350px; height:224px;border:solid 1px black;"></div>
                </div>

                <div>
                    <input type="button" value="Calendrier"/>
                </div>

                <div>
                    <label for="toolDescription">Description :</label>
                    <input type="textarea" name="toolDescription" required/>
                </div>

                <div>
                    <label for="toolSecurity">Consignes de sécurité :</label>
                    <input type="textarea" name="toolSecurity"/>
                </div>

                <div>
                    <label for="toolAccessories">Accessoires fournis avec l'outil :</label>
                    <input type="textarea" name="toolAccessories"/>
                </div>

                <input type="submit" value="Valider"/>
                <a href="userPageAccount.php">Annuler</a>

            </form>
        </main>

        <?php include('views\footer.php'); ?>

    </body>
</html>