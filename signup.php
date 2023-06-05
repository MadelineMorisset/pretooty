<?php
session_start();



// Connexion à la BDD

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



// Cryptage du mdp

$password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);



// Vérification du mdp

$regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}/";



// Vérification des champs du formulaire

if (!isset($_POST['pseudo']) || empty($_POST['pseudo']) || !isset($_POST['mail']) || empty($_POST['mail']) || !isset($_POST['mdp']) || empty($_POST['mdp']) || !isset($_POST['confirm']) || empty($_POST['confirm'])) {
    die('Le pseudonyme, le mail, le mot de passe et la confirmation du mot de passe sont nécessaires pour créer un compte.');
}
elseif (preg_match($regex, $_POST['mdp'])) {
    die('Le mot de passe doit contenir au minimum 6 caractères dont 1 majuscule, 1 minuscule et 1 chiffre.');
}
elseif ($_POST['mdp'] != $_POST['confirm']) {
    die('Les mots de passe doivent être identiques.');
}
else {
    ('Une erreur est survenue.');
} 



// Vérification de l'existence du pseudo et mail dans la BDD

$query = $db->prepare('SELECT COUNT(*) AS nb FROM utilisateur WHERE pseudonyme = '.$_POST['pseudo'].'');
$query->execute();
$users = $query ->fetchAll();

if ($users['nb'] != 0) {
    echo('Ce pseudonyme existe déjà.');
}
else {
    ;
}


$query = $db->prepare('SELECT COUNT(*) AS nb FROM utilisateur WHERE mail = '.$_POST['mail'].'');
$query->execute();
$users = $query ->fetchAll();

if ($users['nb'] != 0) {
    echo('Ce mail existe déjà.');
}
else {
    ;
}




// Insertion des données dans la BDD

$pseudo = strip_tags($_POST['pseudo']);
$mail = strip_tags($_POST['mail']);
$mdp = strip_tags($_POST['mdp']);
$confirm = strip_tags($_POST['confirm']);


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