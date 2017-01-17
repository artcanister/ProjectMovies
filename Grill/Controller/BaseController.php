<?php
namespace Grill\Controller;
/**
* Controleur de base à instancier par les controleur de l'appli
**/
class  BaseController
{
	public function render($filename, $data = [])
	{
		$view = new \Grill\View\View();
		$view->showTemplate($filename, $data);
	}
}