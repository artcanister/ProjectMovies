<?php

namespace Controller;
use Grill\Controller\BaseController;
use Manager\MovieManager;

class MovieController extends BaseController
{
	/**
	*   page d'accueil
	**/

	public function home()
	{
		// récupère les films au hasard
		$movieManager = new MovieManager();
		$movies = $movieManager->findRandomMovies();
		$data = ["movies" => $movies];
		$this->render("movie/home", $data);
	}
	/**
	*   page de détail d'un film
	**/ 
	public function showSingle()
	{
		$movieManager = new MovieManager();
		$id = $_GET['id'];
		$movie =  $movieManager->findById($id);
		$this->render("movie/single", ["movie" => $movie]);
	}
}