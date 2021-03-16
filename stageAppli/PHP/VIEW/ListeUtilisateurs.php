
<?php
    $users = UtilisateursManager::getList();
echo '<section class="colonne">


    <div class="centre"> 
    <h1 class="texteClair">Sélectionner un rôle pour filtrer :</h1>
    </div>
    <div>
        <div id="admin" class="bouton">Administrateurs</div><div></div>
        <div id="rir" class="bouton">Rirs</div><div></div>
        <div id="form" class="bouton">Formateurs</div><div></div>
        <div id="stag" class="bouton">Stagiaires</div><div></div>
        <div id="tous" class="bouton">Tous</div>
    </div>

    <div class="espaceHor"></div>


    <div class="zoneBouton">
        <div class="grande">
            <div><a href="index.php?page=FormUtilisateur&mode=ajouter"><button class="bouton"><i
                            class="fas fa-plus-circle"></i> &nbsp Ajouter</button></a></div>

            <div><a href="index.php?page=InterfaceUser"><button class="bouton"><i class="far fa-arrow-alt-circle-left"></i> &nbsp Retour</button></a></div>
        </div>
        <div class="triple"></div>
    </div>

    <div class="espaceHor"></div>';
    foreach ($users as $unUser) 
    {
        $role= RolesManager::findById($unUser->getIdRole());
        
            echo '<div class="info ">
                <div class="case grande">
                <div>'.$unUser->getNomUser().'</div>
                <div>'.$unUser->getPrenomUser().'</div>
                <div class="role">'.$role->getLibelleRole().'</div>
                </div>

                <div class="triple">
                    <div class="mini"></div>
                    <a href="index.php?page=FormUtilisateur&mode=details&id='.$unUser->getIdUser().'"><button class="bouton"><i class="fas fa-info-circle"></i> Détail</button></a>
                    <div class="mini"></div>
                    <div class="mini"></div>
                    <a href="index.php?page=FormUtilisateur&mode=modifier&id='.$unUser->getIdUser().'"><button class="bouton"><i class="fas fa-edit"></i> Modifier</button></a>
                    <div class="mini"></div>
                    <div class="mini"></div>
                    <a href="index.php?page=FormUtilisateur&mode=supprimer&id='.$unUser->getIdUser().'"><button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button></a>
                    <div class="mini"></div>
                </div>';


                echo '</div>';
        
    }

    echo '</section>';
