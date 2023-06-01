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

$password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

$query = $db->prepare('INSERT INTO utilisateur (pseudonyme,mail,mdp,localisation,id_theme,id_statut) VALUES (:pseudo, :mail, :mdp,:localisation,:theme,:statut)');
$query->execute([
    'pseudo'=>$_POST['pseudo'],
    'mail'=>$_POST['mail'],
    'mdp'=>$password,
    'localisation'=>'',
    'theme'=>'1',
    'statut'=>'2',
    ]);
$users = $query->fetchAll();



?>