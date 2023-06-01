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

$query = $db->prepare('SELECT * FROM utilisateur WHERE pseudonyme = '.$_POST['pseudo'].'');
$query->execute();
$users = $query->fetchAll();

if (!isset($_POST['pseudo']) || empty($_POST['pseudo']) || !isset($_POST['mdp']) || empty($_POST['mdp'])) {
    die('<strong>Le pseudonyme et le mot de passe sont nécessaires pour se connecter à l\'espace personnel.</strong>');
} 

$pseudo = strip_tags($_POST['pseudo']);
$mdp = strip_tags($_POST['mdp']);

foreach ($users as $user) {
    if ($pseudo === $user['pseudonyme'] && $mdp === $user['mdp']) {
        $_SESSION['pseudo'] = $pseudo;
    } 
}

header('Location: espacePersonnel.php');

?>