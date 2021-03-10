
<section>

    <?php

$mode = $_GET['mode'];

switch ($mode) {
    case "ajouter":
        {
            echo '<form action="Index.php?page=actionUtilisateur&mode=ajouter" method="POST">';
            break;
        }
    case "modifier":
        {
            // echo'<form action="Index.php?page=ActionUtilisateur&mode=modifier" method="POST"';
            echo '<form method="POST" action="Index.php?page=actionUtilisateur&mode=modifier" method="POST">';
            $idRecherche = $_GET['id'];
            $id = UtilisateursManager::findById($idRecherche);
            break;
        }
    case "details":
        {
            echo '<form method="POST" >';
            $idRecherche = $_GET['id'];
            $id = UtilisateursManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form action="Index.php?page=actionUtilisateur&mode=supprimer" method="POST"';
            break;
        }
}

if (isset($_GET["id"])) {
    $choix = UtilisateursManager::findById($_GET["id"]);
    $role = RolesManager::getList();
}
?>

      <form action="" method="POST">
      <?php if ($mode != "ajouter") {
    echo '<input name= "idUser" value="' . $choix->getIdUser() . '" type= "hidden">';
}

if ($mode == "ajouter") {
    echo '<input value="" type= "hidden">';
}

?>
            <div class=" ">
                <div class="info colonne ">
                    <label for="nomUser">Nom :</label>
                    <input type="text" id="nom" <?php if ($mode == "details" || $mode == "supprimer") {
    echo '" disabled "';
}
?>name="nomUser" value="<?php if ($mode != "ajouter") {
    echo $choix->getNomUser();
}
?>" required pattern="[a-zA-Z- ]{3,}">
                </div>
                <div class="info colonne ">
                    <label for="prenomUser">Prénom :</label>
                    <input type="text" id="prenom" <?php if ($mode == "details" || $mode == "supprimer") {
    echo '" disabled "';
}
?>name="prenomUser" value="<?php if ($mode != "ajouter") {
    echo $choix->getPrenomUser();
}
?>" required pattern="[a-zA-Z- ]{3,}">
                </div>
            </div>
            <div>

                <div class="info colonne  grande">
                    <label for="emailUser">Adresse E-mail :</label>
                    <input type="text" id="email" <?php if ($mode == "details" || $mode == "supprimer") {
    echo '" disabled "';
}
?>name="emailUser" required
                        pattern="^[0-9a-zA-Z._-]+@{1}[0-9a-zA-Z.-]{2,}[.]{1}[a-z]{2,6}$" value="<?php if ($mode != "ajouter") {
    echo $choix->getEmailUser();
}
?>">
                </div>
                <div class="info colonne  grande">
                    <label for="telUser">Numéro de téléphone :</label>
                    <input type="text" id="telephone" <?php if ($mode == "details" || $mode == "supprimer") {
    echo '" disabled "';
}
?>name="telUser" required
                        pattern="^(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" value="<?php if ($mode != "ajouter") {
    echo $choix->getTelUser();
}
?>">
                </div>
            </div>

            <div>
                <div class="info colonne center relatif">
                    <label for="mdpUser">Mot de passe :</label>
                    <input type="password" id="mdp" <?php if ($mode == "details" || $mode == "supprimer") {
    echo '" disabled "';
}
?>name="mdpUser" value="<?php if ($mode != "ajouter") {
    echo $choix->getMdpUser();
}
?>" required
                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[!@#\$%\^&\*+])[a-zA-Z\d!@#\$%\^&\*+]{8,}$">
                    <div class="mini">
                        <div class="oeil">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="aideMdp absolu">
                        <div>Liste des critères à respecter !! </div>
                        <div>
                            <div class="mini"><i class="far fa-times-circle rouge"></i>
                            </div>
                            <div> 8 caractères minimum</div>
                        </div>
                        <div>
                            <div class="mini"><i class="far fa-times-circle rouge"></i>
                            </div>
                            <div>majuscule(s)</div>
                        </div>
                        <div>
                            <div class="mini"><i class="far fa-times-circle rouge"></i>
                            </div>
                            <div>minuscule(s)</div>
                        </div>
                        <div>
                            <div class="mini"><i class="far fa-times-circle rouge"></i>
                            </div>
                            <div>nombre(s)</div>
                        </div>
                        <div>
                            <div class="mini"><i class="far fa-times-circle rouge"></i>
                            </div>
                            <div>caractères spéciaux</div>
                        </div>
                    </div>
                </div>


                <div class="info colonne center">
                    <label for="confirmation">Confirmation de mot de passe :</label>
                    <input type="password" id="confirmation" <?php if ($mode == "details" || $mode == "supprimer") {
    echo '" disabled "';
}
?>name="confirmation" value="<?php if ($mode != "ajouter") {
    echo $choix->getMdpUser();
}
?>" title="remettre le même mot de passe"
                        required>
                </div>
            </div>
                <div>
                <div class="info colonne center">
                    <label for="idRole">Role :</label>
                    <?php

optionSelect($id, "roles", "idRole", $mode, "libelleRole","");
?>

                </div>
            </div>
            <div>
                <div class="info  center">

                    <?php

switch ($mode) {
    case "ajouter":
        {
            echo '<button id="submit" class="bouton" type="submit" disabled><i class="fas fa-paper-plane"></i>&nbsp Ajouter</button>';
            break;
        }
    case "modifier":
        {
            echo '<button class="bouton"><i class="fas fa-edit"></i> &nbsp Modifier</button>';
            break;
        }

    case "supprimer":
        {
            echo '<button class="bouton"><i class="fas fa-trash-alt"></i>&nbsp Supprimer</button>';
            break;
        }

}
echo '<div class="mini"></div>';
echo '<a href="Index.php?page=listeUtilisateurs"><div class="bouton"><i class="far fa-arrow-alt-circle-left"></i>&nbsp Retour</div></a>';
?>


                   </div>
            </div>
            <div>
                <div class="info center">
                    <div class="erreur"></div>
                </div>
            </div>

        </form>

    </section>