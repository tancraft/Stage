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
	"default"=>["PHP/VIEW/","listeUtilisateurs","Accueil",false],

	"testsManagers"=>["PHP/VIEW/","TestsManagers","page de tests",false],

	"listeUtilisateurs"=>["PHP/VIEW/","ListeUtilisateurs","Liste des utilisateurs",false],
	"formConnexion"=>["PHP/VIEW/","FormConnexion","Formulaire de connexion",false],
	"actionConnexion"=>["PHP/VIEW/","ActionConnexion","Actions de deconnexion",false],

	"formUtilisateur"=>["PHP/VIEW/","FormUtilisateur","Formulaire Utilisateur",false],
	"actionUtilisateur"=>["PHP/VIEW/","ActionUtilisateur","Actions Utilisateur",false],

	"interfaceAdmin"=>["PHP/VIEW/","InterfaceAdmin","Interface administrateur",false],

	"interfaceFormateur"=>["PHP/VIEW/","InterfaceFormateur","Interface formateur",false],

	"interfaceStagiaire"=>["PHP/VIEW/","InterfaceStagiaire","Interface stagiaire",false],
	"testOutils"=>["","testOutils","Interface stagiaire",false]

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