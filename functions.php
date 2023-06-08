<?php


function showMyAccount() {
    include('dataBaseConnexion.php');
    $query = $db->prepare('SELECT * FROM utilisateur INNER JOIN theme ON utilisateur.id_theme = theme.id_theme
                                                    INNER JOIN outil ON utilisateur.id_utilisateur = outil.id_utilisateur
                                                    INNER JOIN categorie ON outil.id_categorie = categorie.id_categorie
                                                    INNER JOIN categorie_u ON utilisateur.categorie_u = categorie_u.id_categorie_u
                                                    INNER JOIN emprunt ON outil.id_outil = emprunt.id_outil
                                                    WHERE pseudonyme = :pseudo');
    $query->execute([
        "pseudo" => $_SESSION,
    ]);
    $users = $query->fetchAll();
}




?>