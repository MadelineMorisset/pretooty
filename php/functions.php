<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// USERPAGEACCOUNT

    function showMyAccount() {
        include('dataBaseConnexion.php');
        $query = $db->prepare('SELECT * FROM utilisateur INNER JOIN categorie_u ON utilisateur.categorie_u = categorie_u.id_categorie_u INNER JOIN theme ON utilisateur.id_theme = theme.id_theme INNER JOIN taille_police ON utilisateur.id_police = taille_police.id_taille_police
    WHERE utilisateur.id_utilisateur = :id_user');
        $query->execute([
            "id_user" => $_SESSION['id_utilisateur'],
            ]);
        $users = $query->fetch(PDO::FETCH_ASSOC);
        return $users;
    }


    

    


        


        // MODIFIER MOT DE PASSE

        function editMyAccountPassword() {
            include('php\dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET mdp = :passwords WHERE id_utilisateur = :id_user');
            $query-> execute([
                "passwords" => $_POST['passwords'],             // PASSWORD HASH !!!!!
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
        }


    // ONGLET PARAMETRES

        // NOTIFICATIONS



        // SUPPRIMER MON COMPTE

        function deleteMyAccount() {
            include('php\dataBaseConnexion.php');
            $query = $db->prepare('DELETE FROM utilisateur WHERE id_utilisateur = :id_user');
            $query->execute([
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();

            echo '<div>Compte supprimé avec succès.</div>';    
        }


        // TAILLE DE LA POLICE ET THEME COULEUR

        function chooseFontSize() {
            include('php\dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET id_police = :id_font WHERE id_utilisateur = :id_user');
            $query->execute([
                "id_font" => $_POST['id_font'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();
        }


        function chooseThemeColor() {
            include('php\dataBaseConnexion.php');
            $query = $db->prepare('UPDATE utilisateur SET id_theme = :id_theme WHERE id_utilisateur = :id_user');
            $query->execute([
                "id_theme" => $_POST['id_theme'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();
        }





?>