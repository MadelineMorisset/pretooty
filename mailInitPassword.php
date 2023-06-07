<?php



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





if (isset($_POST['mail'])) {
    $password = uniqid();
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $subject = 'Mot de passe oublié';
    $message = "Bonjour, voici votre nouveau mot de passe : $password";           // à modifier pour envoyer le lien du chgt de mdp
    $headers = 'Content-Type: text/plain; charset="UTF-8"';

    if (mail($_POST['mail'], $subject, $message, $headers)) {
        $stmt = $db->prepare("UPDATE utilisateur SET mdp = ? WHERE mail = ?");
        $stmt->execute([$hashedPassword, $_POST['email']]);
        echo "E-mail envoyé";
    } else {
        echo "Une erreur est survenue";
    }
}


header('Location: index.php');

?>