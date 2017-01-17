<?php

//Défini nos routes URL, Nom de la méthode, nom du contrôleur
$routes = [
		["/", "home", "MovieController"],				// affiche la page d'accueil
		["/movie", "showSingle", "MovieController"],		// affiche le détail d'un film
		["/legals", "showLegals", "DefaultController"],		// affiche les mentions légales
		["/faq", "showFaq", "DefaultController"],		// affiche la FAQ
		["/user", "showRegister", "UserController"],				// affiche l'utilisateur

	];