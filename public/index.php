<?php
spl_autoload_register(function($className)
{
	$className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
/*
* SUPER IMPORTANT
* UTILISATION STANDARD DE COMPOSER AVEC PACKAGIST
*/
	// Si le fichier existe dans le sous dossier app…
	if (file_exists("../app/" . $className . ".php")) 	{
		include ("../app/" . $className . ".php");
	}
	// Sinon on démarre de la racine
	else	{
		include ("../" . $className . ".php");
	}
	
});

// Inclur l'autoload de composer, sil existe
if (file_exists("../vendor/autoload.php")){
	include("../vendor/autoload.php");
}
// récupére l'url définie dans le HTAccess
$url = (!empty($_GET['p'])) ? $_GET['p'] : "/";

//Défini nos routes URL, Nom de 
include ("../app/routes.php");
include ("../app/config.php");

// Créé une instance du dispatcher
$dispatcher = new Grill\Controller\Dispatcher();

// Fait la correspondance entre l'URL et les routes
$dispatcher->match($routes, $url);