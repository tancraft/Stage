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
// $pSupp=UtilisateursManager::findById(5);
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


