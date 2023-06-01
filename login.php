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

$query = $db->prepare('SELECT * FROM utilisateur WHERE pseudonyme = '.$_POST['pseudoMail'].' OR mail = '.$_POST['pseudoMail'].'');
$query->execute();
$users = $query->fetchAll();

if (!isset($_POST['pseudoMail']) || empty($_POST['pseudoMail']) || !isset($_POST['mdp']) || empty($_POST['mdp'])) {
    die('<strong>Le pseudonyme ou le mail et le mot de passe sont nécessaires pour se connecter à l\'espace personnel.</strong>');
} 

$pseudo = strip_tags($_POST['pseudoMail']);
$mdp = strip_tags($_POST['mdp']);

$checkPassword = password_verify($mdp, $users['mdp']);      

foreach ($users as $user) {
    if ($pseudo === $user['pseudonyme'] && $checkPassword === true) {
        $_SESSION['pseudoMail'] = $pseudo;
    } 
}

header('Location: espacePersonnel.php');

?>