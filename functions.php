<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// USERPAGEACCOUNT

    // ONGLET GENERAL

    function showMyAccountGeneral() {
        include('dataBaseConnexion.php');
        $query = $db->prepare('SELECT * FROM utilisateur INNER JOIN categorie_u ON utilisateur.categorie_u = categorie_u.id_categorie_u
    WHERE utilisateur.id_utilisateur = :id_user');
        $query->execute([
            "id_user" => $_SESSION['id_utilisateur'],
            ]);
        $users = $query->fetchAll();

        foreach($users as $user) {
            echo '<label for="categoryButton">Catégorie :</label>
                    <select name="categoryButton" readonly style="border-color:transparent">
                        <option value="'.$user['id_categorie_u'].'">'.$user['nom_categorie_u'].'</option>
                    </select>

                <button onclick="clickButtonCategory() id="categoryEditButton">Modifier</button>

                <div>Pseudonyme : '.$user['pseudonyme'].' </div>

                <label for="nameButton">Nom :</label> 
                    <input type="text" id="nameButton" value="'.$user['nom_utilisateur'].'" readonly style="border-color:transparent">

                <button onclick="clickButtonName()" id="nameEditButton">Modifier</button>

                <button onclick="editMyAccountName()" id="validateName" class="hidden">Valider</button>

                <label for="firstnameButton">Prénom :</label> 
                    <input type="text" id="firstnameButton" value="'.$user['prenom_utilisateur'].'" readonly style="border-color:transparent">

                <button onclick="editMyAccountFirstName()" id="firstnameEditButton">Modifier</button>
                
                <button onclick="editMyAccountFirstName()" id="validatefirstname" class="hidden">Valider</button>';
        }
    }


        // MODIFIER CATEGORIE

        function editMyAccountCategory() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET categorie_u = :category WHERE id_utilisateur = :id_user');
            $query-> execute([
                "category" => $_POST['category'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
        }


        // MODIFIER NOM

        function editMyAccountName() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET nom_utilisateur = :names WHERE id_utilisateur = :id_user');
            $query-> execute([
                "names" => $_POST['names'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
        }


        // MODIFIER PRENOM

        function editMyAccountFirstName() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET prenom_utilisateur = :firstname WHERE id_utilisateur = :id_user');
            $query-> execute([
                "firstname" => $_POST['firstname'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
        }


    // ONGLET COORDONNEES

    function showMyAccountContactDetails() {
        include('dataBaseConnexion.php');
        $query = $db->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = :id_user');
        $query->execute([
            "id_user" => $_SESSION['id_utilisateur'],
        ]);
        $users = $query->fetchAll();

        foreach($users as $user) {
            echo '<div>Adresse : '.$user['adresse'].' </div>
            <div>Ville : '.$user['ville'].' </div>
            <div>Code Postal : '.$user['cp'].' </div>
            <div>Téléphone : '.$user['tel'].' </div>
            <div>Adresse mail : '.$user['mail'].' </div>
            <div>Mot de passe</div>';
        }
    }


        // MODIFIER ADRESSE

        function editMyAccountAddress() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET adresse = :adress WHERE id_utilisateur = :id_user');
            $query-> execute([
                "adress" => $_POST['adress'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
        }


        // MODIFIER VILLE

        function editMyAccountTown() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET ville = :town WHERE id_utilisateur = :id_user');
            $query-> execute([
                "town" => $_POST['town'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
        }


        // MODIFIER CODE POSTAL

        function editMyAccountCP() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET cp = :CP WHERE id_utilisateur = :id_user');
            $query-> execute([
                "CP" => $_POST['CP'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
        }


        // MODIFIER TELEPHONE

        function editMyAccountTelephone() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET tel = :telephone WHERE id_utilisateur = :id_user');
            $query-> execute([
                "telephone" => $_POST['telephone'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
        }


        // MODIFIER MOT DE PASSE

        function editMyAccountPassword() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET mdp = :passwords WHERE id_utilisateur = :id_user');
            $query-> execute([
                "passwords" => $_POST['passwords'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
        }


    // ONGLET PARAMETRES

        // NOTIFICATIONS



        // SUPPRIMER MON COMPTE

        function deleteMyAccount() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('DELETE FROM utilisateur WHERE id_utilisateur = :id_user');
            $query->execute([
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();

            echo '<div>Compte supprimé avec succès.</div>';    
        }


        // TAILLE DE LA POLICE ET THEME COULEUR

        function chooseFontSize() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET id_police = :id_font WHERE id_utilisateur = :id_user');
            $query->execute([
                "id_font" => $_POST['id_font'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();
        }


        function chooseThemeColor() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET id_theme = :id_theme WHERE id_utilisateur = :id_user');
            $query->execute([
                "id_theme" => $_POST['id_theme'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();
        }





?>