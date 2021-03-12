<?php
$role = $_GET['idRole'];
echo '<section class="double">
        <div class="colonne ">';
if ($role == 5) {
    header("location: index.php?page=ListeFichesItv");

} else if ($role < 5) {
    echo '<a href="index.php?page=ListeSuiviStagiaires" class="info ">
            <button class="bouton grandBouton">Livrets de suivi des stagiaires</button>
          </a>';
    echo '<a href="index.php?page=ListeFichesItv" class="info ">
            <button class="bouton grandBouton">gestion des fiches intervention</button>
          </a>';
    if ($role < 4) {
        echo '<a href="index.php?page=ListeOffres" class="info ">
                <button class="bouton grandBouton">gestion des offres</button>
              </a>';
        echo '<a href="index.php?page=ListeStagiaires" class="info ">
                <button class="bouton grandBouton">gestion des stagiaires</button>
              </a>';
        echo '<a href="index.php?page=ListeDonnees" class="info ">
                <button class="bouton grandBouton">gestion des donnees de base</button>
              </a>';
        if ($role < 3) {
            echo '<a href="index.php?page=ListeFormateurs" class="info ">
                    <button class="bouton grandBouton">gestion des formateurs</button>
                  </a>';
            if ($role < 2) {
                echo '<a href="index.php?page=ListeUtilisateurs" class="info ">
                        <button class="bouton grandBouton">gestion des utilisateurs</button>
                      </a>';
            }
        }
    }
}

echo '</div>
</section>';

