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
	"Default"=>["PHP/VIEW/","ListeUtilisateurs","Accueil",false],

	"TestsManagers"=>["PHP/VIEW/","TestsManagers","page de tests",false],

	"ListeUtilisateurs"=>["PHP/VIEW/","ListeUtilisateurs","Liste des utilisateurs",false],
	"FormConnexion"=>["PHP/VIEW/","FormConnexion","Formulaire de connexion",false],
	"ActionConnexion"=>["PHP/VIEW/","ActionConnexion","Actions de deconnexion",false],

	"FormUtilisateur"=>["PHP/VIEW/","FormUtilisateur","Formulaire Utilisateur",false],
	"ActionUtilisateur"=>["PHP/VIEW/","ActionUtilisateur","Actions Utilisateur",false],

	"InterfaceAdmin"=>["PHP/VIEW/","InterfaceAdmin","Interface administrateur",false],

	"InterfaceFormateur"=>["PHP/VIEW/","InterfaceFormateur","Interface formateur",false],

	"InterfaceStagiaire"=>["PHP/VIEW/","InterfaceStagiaire","Interface stagiaire",false]

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