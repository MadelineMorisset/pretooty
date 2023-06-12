<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// USERPAGEACCOUNT

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


function showMyAccountCoordonnees() {
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








// $query = $db->prepare('SELECT * FROM utilisateur INNER JOIN theme ON utilisateur.id_theme = theme.id_theme
//                                                     INNER JOIN outil ON utilisateur.id_utilisateur = outil.id_utilisateur
//                                                     INNER JOIN categorie ON outil.id_categorie = categorie.id_categorie
//                                                     INNER JOIN categorie_u ON utilisateur.categorie_u = categorie_u.id_categorie_u
//                                                     INNER JOIN emprunt ON outil.id_outil = emprunt.id_outil
//                                                     WHERE utilisateur.id_utilisateur = :id_utilisateur');
//     $query->execute([
//         "id_utilisateur" => $_SESSION['id_utilisateur'],
//         ]);
//     $users = $query->fetchAll();
?>