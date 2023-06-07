<?php
session_start();

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=pretooty;charset=utf8',
        'root',
        '',
    );
}
catch (Exception $e) {
    exit('<strong>Error:</strong>'.$e->getMessage());
}


if (isset($_POST['mdp']) || !empty($_POST['mdp']) || isset($_POST['confirm']) || !empty($_POST['confirm'])) {
    if ($_POST['mdp'] === $_POST['confirm']) {

        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        $query = $db->prepare('UPDATE utilisateur SET mdp = :mdp WHERE id_utilisateur = :id_user');
        $query->execute([
                    "mdp" => $mdp,
                    "id_user" => $id_user,                  // OU RECUPERER ID_USER ??????????
                ]);
    }
} 


$users = $query->fetchAll();










?>