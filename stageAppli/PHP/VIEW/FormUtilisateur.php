
<section>

    <?php

$mode = $_GET['mode'];
if (isset($_GET['id']))
{
    $idUser=$_GET['id'];
    $unUser = UtilisateursManager::findById($idUser);
}else{
    $unUser = new Utilisateurs();
    $idUser= $unUser->getIdUser();
}
$idRole = $unUser->getIdRole();
switch ($mode) {
    case "ajouter":
        {
            echo '<form action="Index.php?page=actionUtilisateur&mode=ajouter" method="POST">';
            $disabled = '';
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="Index.php?page=actionUtilisateur&mode=modifier" method="POST">';
            $disabled = '';
            break;
        }
    case "details":
        {
            echo '<form method="POST" >';
            $disabled = 'disabled';
            break;
        }
    case "supprimer":
        {
            echo '<form action="Index.php?page=actionUtilisateur&mode=supprimer" method="POST"';
            $disabled = 'disabled';
            break;
        }
}
?>

      <form action="" method="POST">
      <?php if ($mode != "ajouter") {
    echo '<input name= "idUser" value="' . $idUser . '" type= "hidden">';
}

if ($mode == "ajouter") {
    echo '<input value="" type= "hidden">';
}

?>
            <div class=" ">
                <div class="info colonne ">
                    <label for="nomUser">Nom :</label>
                    <input type="text" id="nom" <?= $disabled;?> name="nomUser" value="<?= $unUser->getNomUser();?>" required pattern="[a-zA-Z- ]{3,}">
                </div>
                <div class="info colonne ">
                    <label for="prenomUser">Prénom :</label>
                    <input type="text" id="prenom" <?= $disabled;?> name="prenomUser" value="<?= $unUser->getPrenomUser();?>" required pattern="[a-zA-Z- ]{3,}">
                </div>
            </div>
            <div>

                <div class="info colonne  grande">
                    <label for="emailUser">Adresse E-mail :</label>
                    <input type="text" id="email" <?= $disabled;?> name="emailUser" required
                        pattern="^[0-9a-zA-Z._-]+@{1}[0-9a-zA-Z.-]{2,}[.]{1}[a-z]{2,6}$" value="<?= $unUser->getEmailUser();?>">
                </div>
                <div class="info colonne  grande">
                    <label for="telUser">Numéro de téléphone :</label>
                    <input type="text" id="telephone" <?= $disabled;?> name="telUser" required
                        pattern="^(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" value="<?php echo $unUser->getTelUser();?>">
                </div>
            </div>

            <div>
                <div class="info colonne center relatif">
                    <label for="mdpUser">Mot de passe :</label>
                    <input type="password" id="mdp" <?= $disabled;?> name="mdpUser" value="<?= $unUser->getMdpUser();?>" required
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
                    <input type="password" id="confirmation" <?= $disabled;?> name="confirmation" value="<?= $unUser->getMdpUser();?>" title="remettre le même mot de passe"
                        required>
                </div>
            </div>
                <div>
                <div class="info colonne center">
                    <label for="idRole">Role :</label>
                    <?php

$selRole = optionSelect($idUser,$idRole, "roles", "idRole", $mode, "libelleRole","");
echo $selRole;
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