<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/","accueil","Accueil"],
	"TestactionsManager"=>["PHP/MODEL/TESTMANAGER/","TestactionsManager","Test de actions"],
	"TestactionscorrespondantesManager"=>["PHP/MODEL/TESTMANAGER/","TestactionscorrespondantesManager","Test de actionscorrespondantes"],
	"TestactivitesManager"=>["PHP/MODEL/TESTMANAGER/","TestactivitesManager","Test de activites"],
	"TestanimationManager"=>["PHP/MODEL/TESTMANAGER/","TestanimationManager","Test de animation"],
	"TestblocscompetencesManager"=>["PHP/MODEL/TESTMANAGER/","TestblocscompetencesManager","Test de blocscompetences"],
	"TestcausesManager"=>["PHP/MODEL/TESTMANAGER/","TestcausesManager","Test de causes"],
	"TestcauseslieesManager"=>["PHP/MODEL/TESTMANAGER/","TestcauseslieesManager","Test de causesliees"],
	"TestdegresurgenceManager"=>["PHP/MODEL/TESTMANAGER/","TestdegresurgenceManager","Test de degresurgence"],
	"TestenvironnementsManager"=>["PHP/MODEL/TESTMANAGER/","TestenvironnementsManager","Test de environnements"],
	"TestficheactiviteManager"=>["PHP/MODEL/TESTMANAGER/","TestficheactiviteManager","Test de ficheactivite"],
	"TestfichesinterventionsManager"=>["PHP/MODEL/TESTMANAGER/","TestfichesinterventionsManager","Test de fichesinterventions"],
	"TestformateursManager"=>["PHP/MODEL/TESTMANAGER/","TestformateursManager","Test de formateurs"],
	"TestlieuxManager"=>["PHP/MODEL/TESTMANAGER/","TestlieuxManager","Test de lieux"],
	"TestmateriauxManager"=>["PHP/MODEL/TESTMANAGER/","TestmateriauxManager","Test de materiaux"],
	"TestmateriauxutilisesManager"=>["PHP/MODEL/TESTMANAGER/","TestmateriauxutilisesManager","Test de materiauxutilises"],
	"TestmesmManager"=>["PHP/MODEL/TESTMANAGER/","TestmesmManager","Test de mesm"],
	"TestoffresManager"=>["PHP/MODEL/TESTMANAGER/","TestoffresManager","Test de offres"],
	"TestoffresformateursManager"=>["PHP/MODEL/TESTMANAGER/","TestoffresformateursManager","Test de offresformateurs"],
	"TestoperationsManager"=>["PHP/MODEL/TESTMANAGER/","TestoperationsManager","Test de operations"],
	"TestoutilscaisseManager"=>["PHP/MODEL/TESTMANAGER/","TestoutilscaisseManager","Test de outilscaisse"],
	"TestoutilscaisseutilisesManager"=>["PHP/MODEL/TESTMANAGER/","TestoutilscaisseutilisesManager","Test de outilscaisseutilises"],
	"TestoutilsmagasinManager"=>["PHP/MODEL/TESTMANAGER/","TestoutilsmagasinManager","Test de outilsmagasin"],
	"TestoutilsmagasinutilisesManager"=>["PHP/MODEL/TESTMANAGER/","TestoutilsmagasinutilisesManager","Test de outilsmagasinutilises"],
	"TestrolesManager"=>["PHP/MODEL/TESTMANAGER/","TestrolesManager","Test de roles"],
	"TeststagiairesManager"=>["PHP/MODEL/TESTMANAGER/","TeststagiairesManager","Test de stagiaires"],
	"TeststagiairesaffectesManager"=>["PHP/MODEL/TESTMANAGER/","TeststagiairesaffectesManager","Test de stagiairesaffectes"],
	"TeststagiairesfichesinterventionsManager"=>["PHP/MODEL/TESTMANAGER/","TeststagiairesfichesinterventionsManager","Test de stagiairesfichesinterventions"],
	"TesttypesmaintenancesManager"=>["PHP/MODEL/TESTMANAGER/","TesttypesmaintenancesManager","Test de typesmaintenances"],
	"TestutilisateursManager"=>["PHP/MODEL/TESTMANAGER/","TestutilisateursManager","Test de utilisateurs"],
];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}