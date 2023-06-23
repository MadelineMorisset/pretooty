<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_FILES['toolImage'])) {
    $tmpName = $_FILES['toolImage']['tmp_name'];
    $name = $_FILES['toolImage']['name'];
    // $size = $_FILES['toolImage']['size'];
    $error = $_FILES['toolImage']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
    $extensionsAcceptees = ['png','jpg','jpeg'];

        if (in_array($extension, $extensionsAcceptees)) {
            if ($error == 0) {
                $uniqueName = uniqid('',true);
                $file = $uniqueName.".".$extension;
                move_uploaded_file($tmpName, "../assets/img/tools/".$file);
            }
            else {
                die("Une erreur est survenue.");
            }
        }
        else {
            die("Le fichier doit être de type .png, .jpg ou .jpeg.");
        }
}


include('dataBaseConnexion.php');

$query = $db->prepare('INSERT INTO outil (nom_outil,description,consignes_securite,accessoires,photo,id_utilisateur,id_categorie,id_etat_outil) VALUES (:toolName, :toolDescription, :toolSecurity, :toolAccessories, :toolImage, :id_user, :toolCategory, :toolStatus)');
$query->execute([
    "toolName" => $_POST["toolName"],
    "toolDescription" => $_POST["toolDescription"],
    "toolSecurity" => $_POST["toolSecurity"],
    "toolAccessories" => $_POST["toolAccessories"],
    "toolImage" => $file,
    "id_user" => $_SESSION['id_utilisateur'],
    "toolCategory" => $_POST["toolCategory"],
    "toolStatus" => $_POST["toolStatus"],
]);


header('Location: toolSheet.php');





?>