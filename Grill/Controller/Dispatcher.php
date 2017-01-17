<?php
namespace Grill\Controller;
/**
* 
*/
class Dispatcher
{
	
	public function match($routes, $url)
	{
		foreach ($routes as $route) {
			if ($route[0] == $url){
				// récupere la méhode associe à l'uRL
				$methodName = $route[1];
				// récrée le nom complet du controleur a instancier
				$controllerName = "Controller\\" . $route[2];
				// on appellle la fonction de de cette route
				$controller = new $controllerName;
				// appel de la méthode
				$controller->$methodName();
			}
		}
	}
}


