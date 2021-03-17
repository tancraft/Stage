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
	"Default"=>["PHP/VIEW/","FormConnexion","Accueil",false],

	"TestsManagers"=>["PHP/VIEW/","TestsManagers","page de tests",false],

	"FormConnexion"=>["PHP/VIEW/","FormConnexion","Formulaire de connexion",false],
	"ActionConnexion"=>["PHP/VIEW/","ActionConnexion","Actions de deconnexion",false],

	"InterfaceUser"=>["PHP/VIEW/","InterfaceUser","Interface Utilisateur",false],

	"ListeUtilisateurs"=>["PHP/VIEW/","ListeUtilisateurs","Liste des utilisateurs",false],
	"ListeFichesItv"=>["PHP/VIEW/","ListeFichesItv","Liste des fiches interventions",false],

	"FormUtilisateur"=>["PHP/VIEW/","FormUtilisateur","Formulaire Utilisateur",false],
	"ActionUtilisateur"=>["PHP/VIEW/","ActionUtilisateur","Actions Utilisateur",false],
	
	/* Lancement des API */
	"AdresseMail"=>["PHP/MODEL/API/","AdresseMail","API",true]


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
		AfficherPage($routes["Default"]);
	}
}
else
{
	AfficherPage($routes["Default"]);
}