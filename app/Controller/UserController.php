<?php

namespace Controller;
use Grill\Controller\BaseController;
use Manager\UserManager;
use Entity\User;

class UserController extends BaseController
{
	/**
	*   page d'accueil
	**/

	public function showRegister()
	{
		$this->register();
		$this->render("user/inscription");
	}

	public function register()
	{
		// Traitement du formulaire
		if (!empty($_POST)){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
		

		// // Validation des données
		// 	$foundUser = $userManager->findOneByEmail($email);
		// 	if ($foundUser){
		// 		$validator->addError("email", "email already registered");
		// 	}

		// 	// si valide
		// 	if ($validator)->rpm_is_valid(filename)

		// // Crée un nouveau user
			$user = new User();


		// Hydratation

			$user->setUsername ($username);
			$user->setEmail ($email);
			
			$factory = new \RandomLib\Factory;
			$generator = $factory->getMediumStrengthGenerator();
			$token = $generator->generateString(50,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
			$user->setToken($token);

			$hashed = password_hash($password, PASSWORD_DEFAULT);
			$user->setPassword($hashed);
			$userManager = new UserManager;
			$userManager->createUser($user);

		}

		// $this->render("user/register");
	}
}