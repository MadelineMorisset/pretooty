<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// USERPAGEACCOUNT

    // ONGLET GENERAL

    function showMyAccountGeneral() {
        include('dataBaseConnexion.php');
        $query = $db->prepare('SELECT * FROM utilisateur INNER JOIN categorie_u ON utilisateur.categorie_u = categorie_u.id_categorie_u
    WHERE utilisateur.id_utilisateur = :id_utilisateur');
        $query->execute([
            "id_utilisateur" => $_SESSION['id_utilisateur'],
            ]);
        $users = $query->fetchAll();

        foreach($users as $user) {
            echo '<div>Catégorie : '.$user['nom_categorie_u'].' </div>
            <div>Pseudonyme : '.$user['pseudonyme'].' </div>
            <div>Nom : '.$user['nom_utilisateur'].' </div>
            <div>Prénom : '.$user['prenom_utilisateur'].' </div>';
        }
    }

    // ONGLET COORDONNEES

    function showMyAccountContactDetails() {
        include('dataBaseConnexion.php');
        $query = $db->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = :id_utilisateur');
        $query->execute([
            "id_utilisateur" => $_SESSION['id_utilisateur'],
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

    
    // ONGLET PARAMETRES

        // NOTIFICATIONS



        // SUPPRIMER MON COMPTE

        function deleteMyAccount() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('DELETE FROM utilisateur WHERE id_utilisateur = :id_utilisateur');
            $query->execute([
                "id_utilisateur" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();

            echo '<div>Compte supprimé avec succès.</div>';    
        }


        // TAILLE DE LA POLICE ET THEME COULEUR

        function chooseFontSize() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET id_police = :id_police WHERE id_utilisateur = :id_utilisateur');
            $query->execute([
                "id_police" => $_POST['id_police'],
                "id_utilisateur" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();
        }


        function chooseThemeColor() {
            include('dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET id_theme = :id_theme WHERE id_utilisateur = :id_utilisateur');
            $query->execute([
                "id_theme" => $_POST['id_theme'],
                "id_utilisateur" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();
        }





?>