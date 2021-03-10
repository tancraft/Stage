<?php
/****** Test de BlocsCompetencesManager ******/

//On teste la recherche par ID
// echo 'Recherche de id=1';
// $p=BlocsCompetencesManager::findById(3);
// var_dump($p);


//On teste l'ajout

// echo 'ajout';
// $pNew = new BlocsCompetences(["numeroBlocComp"=>4,"libelleBlocComp"=>"test d ajout"]);
// var_dump($pNew);
// BlocsCompetencesManager::add($pNew);

//On teste la mise a jour
// $pRecharge=BlocsCompetencesManager::findById(4);
// $pRecharge->setLibelleBlocComp("testmodif");
// var_dump($pRecharge);
// BlocsCompetencesManager::update($pRecharge);


//On affiche le liste des objets
// echo 'On affiche la liste des blocs <br>';
// $tableau=BlocsCompetencesManager::getList();
// var_dump($tableau);


//On teste la suppression
// echo 'On supprime un article <br>';
// $pSupp=BlocsCompetencesManager::findById(4);
// var_dump($pSupp);
// BlocsCompetencesManager::delete($pSupp);


/****** Test de UtilisateursManager ******/

//On teste l'ajout

// echo 'ajout';
// $pNew = new Utilisateurs(["nomUser"=>"admin1","prenomUser"=>"admin1","telUser"=>"0240046261","emailUser"=>"admin1@gmail.com","mdpUser"=>"Admin1*","idRole"=>1]);
// var_dump($pNew);
// UtilisateursManager::add($pNew);

// echo 'ajout';
// $pNew = new Utilisateurs(["nomUser"=>"stagiaire1","prenomUser"=>"stagiaire1","telUser"=>"0720046869","emailUser"=>"stagiaire1@gmail.com","mdpUser"=>"Stagiaire1*","idRole"=>3]);
// var_dump($pNew);
// UtilisateursManager::add($pNew);

// echo 'ajout';
// $pNew = new Utilisateurs(["nomUser"=>"stagiaire2","prenomUser"=>"stagiaire2","telUser"=>"0952478910","emailUser"=>"stagiaire2@gmail.com","mdpUser"=>"Stagiaire2*","idRole"=>3]);
// var_dump($pNew);
// UtilisateursManager::add($pNew);

// echo 'ajout';
// $pNew = new Utilisateurs(["nomUser"=>"formateur1","prenomUser"=>"formateur1","telUser"=>"0145698778","emailUser"=>"formateur1@gmail.com","mdpUser"=>"Formateur1*","idRole"=>3]);
// var_dump($pNew);
// UtilisateursManager::add($pNew);

// echo 'ajout';
// $pNew = new Utilisateurs(["nomUser"=>"formateur2","prenomUser"=>"formateur2","telUser"=>"0614392451","emailUser"=>"formateur2@gmail.com","mdpUser"=>"Formateur2*","idRole"=>3]);
// var_dump($pNew);
// UtilisateursManager::add($pNew);

//On teste la recherche par ID
// echo 'Recherche de id=1';
// $p=UtilisateursManager::findById(3);
// var_dump($p);


//On teste la mise a jour
// $pRecharge=UtilisateursManager::findById(5);
// $pRecharge->setNomUser("testmodif");
// var_dump($pRecharge);
// UtilisateursManager::update($pRecharge);


//On affiche le liste des objets
// echo 'On affiche la liste des objet <br>';
// $tableau=UtilisateursManager::getList();
// var_dump($tableau);


//On teste la suppression
// echo 'On supprime un article <br>';
// $pSupp=UtilisateursManager::findById(7);
// var_dump($pSupp);
// UtilisateursManager::delete($pSupp);

//On teste le getByEmail
// echo 'recherche par email <br>';
// $uRech=UtilisateursManager::getByEmail("stagiaire1@gmail.com");
// var_dump($uRech);
// UtilisateursManager::delete($uRech);

//On affiche le liste des objets par role
// echo 'On affiche la liste des objet par role <br>';
// $tableau=UtilisateursManager::getListByRole(3);
// var_dump($tableau);


/****** Test de OperationsManager ******/

//On teste l'ajout

// echo 'ajout';
// $pNew = new Operations(["numeroOperation"=>"3.3.5","intituleOperation"=>"operation test de managers","schemaOperation"=>"image 53","idMesm"=>3]);
// var_dump($pNew);
// OperationsManager::add($pNew);

//On teste la mise a jour
// $pRecharge=OperationsManager::findById(53);
// $pRecharge->setIntituleOperation("testmodif");
// var_dump($pRecharge);
// OperationsManager::update($pRecharge);


//On affiche le liste des objets
// echo 'On affiche la liste des objet <br>';
// $tableau=OperationsManager::getList();
// var_dump($tableau);


//On teste la suppression
// echo 'On supprime un article <br>';
// $pSupp=UtilisateursManager::findById(5);
// var_dump($pSupp);
// UtilisateursManager::delete($pSupp);

/****** Test de OutilsCaisseManager ******/

//On affiche le liste des outils par formateur
// echo 'On affiche le liste des outils par formateur <br>';
// $tableau=OutilsCaisseManager::getOutilsCaisseByFormateur(3);
// var_dump($tableau);

//On affiche le liste des objets
// echo 'On affiche la liste des objet <br>';
// $tableau=OutilsCaisseManager::getList();
// var_dump($tableau);

/****** Test de OutilsMagasin ******/

//On affiche le liste des outils par formateur
// echo 'On affiche le liste des outils par formateur <br>';
// $tableau=OutilsMagasinManager::getOutilsMagasinByFormateur(2);
// var_dump($tableau);

//On affiche le liste des objets
// echo 'On affiche la liste des objet <br>';
// $tableau=OutilsMagasinManager::getList();
// var_dump($tableau);

/****** Test des materiaux ******/

//On affiche le liste des materiaux par formateur
// echo 'On affiche le liste des outils par formateur <br>';
// $tableau=OutilsMagasinManager::getOutilsMagasinByFormateur(3);
// var_dump($tableau);

//On affiche le liste des objets
// echo 'On affiche la liste des objet <br>';
// $tableau=OutilsMagasinManager::getList();
// var_dump($tableau);

/****** OperationsManager ******/

//On affiche le liste des operations par mesm
// echo 'On affiche le liste des operations par mesm <br>';
// $tableau=OperationsManager::getListeOperationByMesm(3);
// var_dump($tableau);

//On affiche le liste des operations
// echo 'On affiche la liste des operations <br>';
// $tableau=OperationsManager::getList();
// var_dump($tableau);

/****** LieuxManager ******/

//On affiche le liste des lieux par environnement
// echo 'On affiche le liste des operations par mesm <br>';
// $tableau=LieuxManager::getLieuByEnvironnement(2);
// var_dump($tableau);

//On affiche le liste des lieux
// echo 'On affiche la liste des operations <br>';
// $tableau=LieuxManager::getList();
// var_dump($tableau);

/****** OffresManager ******/

//On affiche le liste des offres par formateur
// echo 'On affiche le liste des offres par formateur <br>';
// $tableau=OffresFormateursManager::getOffreByFormateur(3);
// var_dump($tableau);

//On affiche la liste des formateurs par offre
// echo 'On affiche la liste des formateurs par offre <br>';
// $tableau=OffresFormateursManager::getFormateurByOffre(2);
// var_dump($tableau);

//On affiche le liste des lieux
// echo 'On affiche le liste des lieux <br>';
// $tableau=OffresFormateursManager::getList();
// var_dump($tableau);

/****** Stagiaire ******/

//'On affiche la liste des stagiaire par offre
// echo 'On affiche la liste des stagiaire par offre <br>';
// $tableau=StagiairesManager::getStagiaireByOffre(1);
// var_dump($tableau);

//On affiche le liste des stagiaires
// echo 'On affiche le liste des lieux <br>';
// $tableau=StagiairesManager::getList();
// var_dump($tableau);


/****** operation ******/

// on affiche la liste des fiche par operation
// echo 'on affiche la liste des fiche par operation <br>';
// $tableau=FichesInterventionsManager::getFicheByOperation(51);
// var_dump($tableau);

//On affiche le liste des stagiaires
// echo 'On affiche le liste des lieux <br>';
// $tableau=FichesInterventionsManager::getList();
// var_dump($tableau);

/****** fiches ******/

// on affiche la liste des activites par fiche
// echo 'on affiche la liste des activites par fiche <br>';
// $tableau=ActivitesManager::getActiviteByFiche(3);
// var_dump($tableau);

//On affiche le liste des stagiaires
// echo 'On affiche le liste des lieux <br>';
// $tableau=ActivitesManager::getList();
// var_dump($tableau);

/****** stagiaire fiche ******/

// on affiche la liste des stagiaires par fiche
// echo 'on affiche la liste des stagiaires par fiche <br>';
// $tableau=StagiairesFichesInterventionsManager::getStagiaireByFiche(2);
// var_dump($tableau);

//On affiche le liste des stagiaire et des fiches
// echo 'On affiche le liste des lieux <br>';
// $tableau=StagiairesFichesInterventionsManager::getList();
// var_dump($tableau);

/****** materiaux utiliser ******/

// on affiche la liste des materiaux utiliser par formateur
// echo 'on affiche la liste des materiaux utiliser par formateur <br>';
// $tableau=MateriauxUtilisesManager::getMateriauxUtiliserByFormateur(2);
// var_dump($tableau);

//On affiche le liste des materiaux utiliser
// echo 'On affiche le liste des materiaux utiliser <br>';
// $tableau=MateriauxUtilisesManager::getList();
// var_dump($tableau);

/****** outils caisse utiliser ******/

// on affiche la liste des outils caisse utiliser par formateur
// echo 'on affiche la liste des outils caisse utiliser par formateur <br>';
// $tableau=OutilsCaisseUtilisesManager::getOutilsCaisseUtilisesrByFormateur(2);
// var_dump($tableau);

//on affiche la liste des outils caisse utiliser
// echo 'on affiche la liste des outils caisse utiliser <br>';
// $tableau=OutilsCaisseUtilisesManager::getList();
// var_dump($tableau);

/****** outils magasin utiliser ******/

// on affiche la liste des outils magasin utiliser par formateur
// echo 'on affiche la liste des outils magasin utiliser par formateur <br>';
// $tableau=OutilsMagasinUtilisesManager::getOutilsMagasinUtilisesrByFormateur(3);
// var_dump($tableau);

//on affiche la liste des magasin caisse utiliser
// echo 'on affiche la liste des outils magasin utiliser <br>';
// $tableau=OutilsMagasinUtilisesManager::getList();
// var_dump($tableau);