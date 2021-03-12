<?php
if (isset($_POST["emailUser"])) {
    $uti = UtilisateursManager::getByEmail($_POST['emailUser']);
}

$mode = isset($_GET["mode"])? $_GET["mode"]:"login";
switch ($mode) {
    case 'login':
        if ($uti != false ) {
            if ($_POST['mdpUser'] == $uti->getMdpUser()) {
                $_SESSION['utilisateur'] = $uti;
                header("location: index.php?page=InterfaceUser&idRole=".$uti->getIdRole());
            } else {
                echo '<div class="titreColonne zoneBouton">le mot de passe ou eMail est incorrect</div>';
                header("refresh:3;url=index.php?page=FormConnexion");
            }
        } else {
            echo '<div class="titreColonne zoneBouton">l\'utilisateur n\'existe pas</div>';
            header("refresh:3;url=index.php?page=FormConnexion");
        }
        break;

    case 'logout':
        session_destroy();
        header("location: index.php?page=FormConnexion");
        break;
}
