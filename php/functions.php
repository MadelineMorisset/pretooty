<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// USERPAGEACCOUNT

    function showMyAccount() {
        include('dataBaseConnexion.php');
        $query = $db->prepare('SELECT * FROM utilisateur INNER JOIN categorie_u ON utilisateur.categorie_u = categorie_u.id_categorie_u INNER JOIN theme ON utilisateur.id_theme = theme.id_theme INNER JOIN taille_police ON utilisateur.id_police = taille_police.id_taille_police
    WHERE utilisateur.id_utilisateur = :id_user');
        $query->execute([
            "id_user" => $_SESSION['id_utilisateur'],
            ]);
        $users = $query->fetch(PDO::FETCH_ASSOC);
        return $users;
    }


    // ONGLET PARAMETRES

        // NOTIFICATIONS



        // SUPPRIMER MON COMPTE

        function deleteMyAccount() {
            include('php/dataBaseConnexion.php');
            $query = $db->prepare('DELETE FROM utilisateur WHERE id_utilisateur = :id_user');
            $query->execute([
                "id_user" => $_SESSION['id_utilisateur'],
            ]);
            $query->fetchAll();

            echo '<section>Compte supprimé avec succès.</section>';    
        }




// CREATE TOOL

// function showUploadedToolImage() {             // A VOIR PLUS TARD 
//     include('php/dataBaseConnexion.php');
//     $query = $db->prepare('SELECT photo FROM outil WHERE id_utilisateur = :id_user');
//     $query->execute([
//         "id_user" => $_SESSION['id_utilisateur'],
//     ]);
//     $users = $query->fetch(PDO::FETCH_ASSOC);

//     foreach ($users as $user) {
//         echo "<img src="./assets/img/tools/'.$user[photo].'"";
//     }
// }


// USERPAGEACTIVITIES

    // MONTRER LES OUTILS

    function showMyTools() {
        include('php/dataBaseConnexion.php');
        $query = $db->prepare('SELECT * FROM outil WHERE id_utilisateur =:id_user');
        $query->execute([
            "id_user" => $_SESSION['id_utilisateur'],
        ]);
        $tools = $query->fetchAll();
        
        foreach ($tools as $userTool) {
            $imagePath = "./assets/img/tools/".$userTool['photo'];
            $link = "<a href='./toolSheet.php?id_outil=".$userTool['id_outil']."'><img src=".$imagePath." alt='photo de l'outil'/>".$userTool['nom_outil']."</a>";
            ?> 
            <section class="ToolCardHorizontalRectangle">
                <section><?= $link; ?></section> 
            </section> 
            <?php
        }
    }



// ALLTOOLS

function showAllTools() {
    include('php/dataBaseConnexion.php');
    $query = $db->prepare('SELECT * FROM outil INNER JOIN utilisateur ON outil.id_utilisateur = utilisateur.id_utilisateur INNER JOIN categorie ON outil.id_categorie = categorie.id_categorie INNER JOIN etat_outil ON outil.id_etat_outil = etat_outil.id_etat_outil');
    $query->execute();
    $tools = $query->fetchAll();
    ?>
    <section class="indexBoxToolCards">
        <?php
        foreach ($tools as $tool) {
            $imagePath = "./assets/img/tools/".$tool['photo'];
            $link = "<a href='./toolSheet.php?id_outil=".$tool['id_outil']."' class='nameToolLinks'>".$tool['nom_outil']."";
            ?>  
            <section class="toolCardVerticalRectangle">
                <section class="title fontSize16px toolCardTitle"> <?= $link; ?> </section>
                <section class="containerPhotoTool">
                    <img src="<?= $imagePath ?>" alt="photo de l'outil" class="photoToolCard"/>
                </section>
                <section class="text fontSize14px toolCardCategoryStatus"> <?= $tool['nom_categorie'] ?>, <?= $tool['nom_etat'] ?> </section>
                <section class="title fontSize14px toolCardCity"> <?= $tool['ville'] ?> (<?= $tool['cp'] ?>) </a> </section>
            </section> 
            <?php
        }
        ?>
    </section>
    <?php
}



// TOOLSHEET

function showToolSheet() {
    include('php/dataBaseConnexion.php');
    $query = $db->prepare('SELECT * FROM outil INNER JOIN categorie ON outil.id_categorie = categorie.id_categorie INNER JOIN utilisateur ON outil.id_utilisateur = utilisateur.id_utilisateur INNER JOIN etat_outil ON outil.id_etat_outil = etat_outil.id_etat_outil WHERE id_outil = :id_tool');
    $query->execute([
        "id_tool" => $_GET['id_outil'],
    ]);
    $tool = $query->fetch(PDO::FETCH_ASSOC);
    return $tool;
}




?>