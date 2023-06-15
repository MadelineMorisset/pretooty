<?php
session_start();

include('php\dataBaseConnexion.php');

if (!isset($_POST['pseudoMail']) || empty($_POST['pseudoMail']) || !isset($_POST['mdp']) || empty($_POST['mdp'])) {
    die('<strong>Le pseudonyme ou le mail et le mot de passe sont nécessaires pour se connecter à l\'espace personnel.</strong>');
} 


$query = $db->prepare('SELECT * FROM utilisateur WHERE pseudonyme = :pseudo OR mail = :mail');
$query->execute([
    "pseudo" => $_POST['pseudoMail'],
    "mail" => $_POST['pseudoMail'],
    ]);
$users = $query->fetchAll();


$pseudo = strip_tags($_POST['pseudoMail']);
$mdp = strip_tags($_POST['mdp']);

      

foreach ($users as $user) {
    $checkPassword = password_verify($mdp, $user['mdp']);
    if ($pseudo === $user['pseudonyme'] && $checkPassword === true) {
        $_SESSION['id_utilisateur']= $user['id_utilisateur'];
        header('Location: userPageAccount.php');

    } 
    else {
        die('Error');
    }
}


?>