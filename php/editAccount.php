<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('dataBaseConnexion.php');


$query = $db->prepare('UPDATE utilisateur SET categorie_u = :category, nom_utilisateur = :name, prenom_utilisateur = :firstname, adresse = :address, ville = :city, cp = :CP, tel = :telephone, id_police = :id_font, id_theme = :id_theme WHERE id_utilisateur = :id_user');
            $query-> execute([
                "category" => $_POST['category'],
                "name" => $_POST['name'],
                "firstname" => $_POST['firstname'],
                "address" => $_POST['address'],
                "city" => $_POST['city'],
                "CP" => $_POST['cp'],
                "telephone" => $_POST['tel'],
                "id_user" => $_SESSION['id_utilisateur'],
                "id_font" => $_POST['id_font'],
                "id_theme" => $_POST['id_theme'],
            ]);




// MODIFICATION DU MOT DE PASSE

$query = $db->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = :id_user');
$query->execute([
    "id_user" => $_SESSION['id_utilisateur'],
    ]);
$user = $query->fetch(PDO::FETCH_ASSOC);

$mdp = strip_tags($_POST['currentmdp']);
$checkPassword = password_verify($mdp, $user['mdp']);

if ($checkPassword === true) {
    if (isset($_POST['newmdp']) || !empty($_POST['newmdp']) || isset($_POST['confirm']) || !empty($_POST['confirm'])) {
        if ($_POST['newmdp'] == $_POST['confirm']) {
    
            $mdpHash = password_hash($_POST['newmdp'], PASSWORD_DEFAULT);
    
            $query = $db->prepare('UPDATE utilisateur SET mdp = :newPassword WHERE id_utilisateur = :id_user');
            $query-> execute([
                    "newPassword" => $mdpHash,
                    "id_user" => $_SESSION['id_utilisateur'],
                    ]);
        }
    }
}




header('Location: ../userPageAccount.php');






?>