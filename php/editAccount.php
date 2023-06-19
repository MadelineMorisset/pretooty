<?php
session_start();

include('dataBaseConnexion.php');

$query = $db->prepare('UPDATE utilisateur SET categorie_u = :category, nom_utilisateur = :name, prenom_utilisateur = :firstname, adresse = :address, ville = :city, cp = :CP, tel = :telephone WHERE id_utilisateur = :id_user');
            $query-> execute([
                "category" => $_POST['category'],
                "name" => $_POST['name'],
                "firstname" => $_POST['firstname'],
                "address" => $_POST['address'],
                "city" => $_POST['city'],
                "CP" => $_POST['cp'],
                "telephone" => $_POST['tel'],
                "id_user" => $_SESSION['id_utilisateur'],
            ]);

// header('Location: ../userPageAccount.php');






?>