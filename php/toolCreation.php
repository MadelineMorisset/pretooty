<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('dataBaseConnexion.php');

$query = $db->prepare('INSERT INTO outil (nom_outil,description,consignes_securite,accessoires,photo,id_utilisateur,id_categorie,id_etat_outil) VALUES (:toolName, :toolDescription, :toolSecurity, :toolAccessories, :toolImage, :id_user, :toolCategory, :toolStatus)');
$query->execute([
    "toolName" => $_POST["toolName"],
    "toolDescription" => $_POST["toolDescription"],
    "toolSecurity" => $_POST["toolSecurity"],
    "toolAccessories" => $_POST["toolAccessories"],
    "toolImage" => $_POST["toolImage"],
    "id_user" => $_SESSION['id_utilisateur'],
    "toolCategory" => $_POST["toolCategory"],
    "toolStatus" => $_POST["toolStatus"],
]);




?>