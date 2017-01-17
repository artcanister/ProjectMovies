<?php
namespace Controller;
use Grill\Controller\BaseController;


class DefaultController extends BaseController
{
	/**
	*   page d'accueil
	**/

	public function showLegals()
	{
		$this->render("default/legals");
	}
	/**
	*   page de détail d'un film
	**/ 
	public function showFaq()
	{
		$this->render("default/faq");
	}
}