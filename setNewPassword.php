<?php
session_start();

include('dataBaseConnexion.php');


if (isset($_POST['mdp']) || !empty($_POST['mdp']) || isset($_POST['confirm']) || !empty($_POST['confirm'])) {
    if ($_POST['mdp'] === $_POST['confirm']) {

        $id_user = $_GET['id_user'];
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        $query = $db->prepare('UPDATE utilisateur SET mdp = :mdp WHERE id_provisoire = :id_user');
        $query->execute([
                    "mdp" => $mdp,
                    "id_user" => $id_user,
                ]);
    }
} 


$users = $query->fetchAll();










?>