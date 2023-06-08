<?php

include('dataBaseConnexion.php');




if (isset($_POST['mail']) || !empty($_POST['mail'])) {

    $subject = 'Mot de passe oublié';
    $message = "Bonjour, voici le lien pour la ré-initialisation de votre mot de passe: \n C:/xampp/htdocs/git/pretooty/forgottenPassword_resetPassword.php";           
    $headers = 'From: Pretooty \n Content-Type: text/plain; charset="UTF-8"';

    if (mail($_POST['mail'], $subject, $message, $headers) == true) {
        $query = $db->prepare("UPDATE utilisateur SET mdp = NULL WHERE mail = :mail");
        $query->execute([
                "mail" => $_POST['email']
                ]);
        echo "E-mail envoyé";
        } 
        else { 
        echo "Une erreur est survenue";
        }
}


// header('Location: index.php');

?>