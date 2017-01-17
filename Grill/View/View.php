<?php

namespace Grill\View;

/**
* Controleur de base à instancier par les controleur de l'appli
**/

class view

{
	public function showTemplate($grill_filename, $grill_data = [])
	{
		// Crée une variable nommée comme chacune des clef du tableau
		extract ($grill_data);
		$grill_page = "../app/templates/$grill_filename.php";
		include ("../app/templates/layout.php");


	}
}