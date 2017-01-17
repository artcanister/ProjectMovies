<?php
namespace Manager;
use Grill\Model\Db;

/*
Contient toutes les requêtes SQL à la table movies (ou associées)
*/

class MovieManager 
{

	public function findRandomMovies()
	{
		$movie = new \Entity\Movie ();
		$pdo = Db::getPdo();
		$sql = "SELECT * FROM movies 
				ORDER BY RAND()
				LIMIT 40";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$movies = $stmt->fetchAll(\PDO::FETCH_CLASS, "\Entity\Movie");
		return $movies;
	}

	public function findById($id)
	{
		$pdo = Db::getPdo();
		$sql = "SELECT * FROM movies 
				WHERE id = :id";	
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();	
		$movie = $stmt->fetchObject("\Entity\Movie");
		return $movie;
	}

}