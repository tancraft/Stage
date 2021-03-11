
<section>

    <?php

$mode = $_GET['mode'];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $unUser = UtilisateursManager::findById($id);
} else {
    $unUser = new Utilisateurs();
}

switch ($mode) {
    case "ajouter":
        {
            $formAction = '<form action="index.php?page=ActionUtilisateur&mode=ajouter" method="POST">';
            $idUserHidden = '<input value="" type= "hidden">';
            $disabled = '';
            $submit = '<button id="submit" class="bouton" type="submit" disabled><i class="fas fa-paper-plane"></i>&nbsp Ajouter</button>';
            break;
        }
    case "modifier":
        {
            $formAction = '<form action="index.php?page=ActionUtilisateur&mode=modifier" method="POST">';
            $idUserHidden = '<input name= "idUser" value="' . $unUser->getIdUser() . '" type= "hidden">';
            $disabled = '';
            $submit = '<button class="bouton"><i class="fas fa-edit"></i> &nbsp Modifier</button>';
            break;
        }
    case "details":
        {
            $formAction = '<form method="POST" >';
            $idUserHidden = '<input name= "idUser" value="' . $unUser->getIdUser() . '" type= "hidden">';
            $disabled = 'disabled';
            $submit = "";
            break;
        }
    case "supprimer":
        {

            $formAction = '<form action="index.php?page=ActionUtilisateur&mode=supprimer" method="POST">';
            $idUserHidden = '<input name= "idUser" value="' . $unUser->getIdUser() . '" type= "hidden">';
            $disabled = 'disabled';
            $submit = '<button class="bouton"><i class="fas fa-trash-alt"></i>&nbsp Supprimer</button>';
            break;
        }
}
echo $formAction;
echo $idUserHidden;

?>
            <div class=" ">
                <div class="info colonne ">
                    <label for="nomUser">Nom :</label>
                    <input type="text" id="nom" <?=$disabled;?> name="nomUser" value="<?=$unUser->getNomUser();?>" required pattern="[a-zA-Z- ]{3,}">
                </div>
                <div class="info colonne ">
                    <label for="prenomUser">Prénom :</label>
                    <input type="text" id="prenom" <?=$disabled;?> name="prenomUser" value="<?=$unUser->getPrenomUser();?>" required pattern="[a-zA-Z- ]{3,}">
                </div>
            </div>
            <div>

                <div class="info colonne  grande">
                    <label for="emailUser">Adresse E-mail :</label>
                    <input type="text" id="email" <?=$disabled;?> name="emailUser" required
                        pattern="^[0-9a-zA-Z._-]+@{1}[0-9a-zA-Z.-]{2,}[.]{1}[a-z]{2,6}$" value="<?=$unUser->getEmailUser();?>">
                </div>
                <div class="info colonne  grande">
                    <label for="telUser">Numéro de téléphone :</label>
                    <input type="text" id="telephone" <?=$disabled;?> name="telUser" required
                        pattern="^(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" value="<?php echo $unUser->getTelUser(); ?>">
                </div>
            </div>

            <div>
                <div class="info colonne center relatif">
                    <label for="mdpUser">Mot de passe :</label>
                    <input type="password" id="mdp" <?=$disabled;?> name="mdpUser" value="<?=$unUser->getMdpUser();?>" required
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
                    <input type="password" id="confirmation" <?=$disabled;?> name="confirmation" value="<?=$unUser->getMdpUser();?>" title="remettre le même mot de passe"
                        required>
                </div>
            </div>
                <div>
                <div class="info colonne center">
                    <label for="idRole">Role :</label>
                    <?php

$selRole = optionSelect($unUser->getIdRole(), "roles", "idRole", $mode, "libelleRole", "");
echo $selRole;
?>

                </div>
            </div>
            <div>
                <div class="info  center">

                    <?php
echo $submit;
echo '<div class="mini"></div>';
echo '<a href="index.php?page=ListeUtilisateurs"><div class="bouton"><i class="far fa-arrow-alt-circle-left"></i>&nbsp Retour</div></a>';
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