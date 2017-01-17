<?php

namespace Manager;

use Grill\Model\Db;
// use Entity\User;


class UserManager
{
	public function showUser($userId)
	{
		$pdo = Db::getPdo();
		$sql = "SELECT * FROM user 
				WHERE userId = :userId";	
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(":userId", $userId);
		$stmt->execute();	
		$userId = $stmt->fetchObject("\Entity\User");
		return $userId;
	}
	public function createUser($user)
	{
		$pdo = Db::getPdo();
		$sql = "INSERT INTO user(userid,username,email,password,token,dateCreated,dateModified) VALUES (:userid,:username,:email,:password,:token,NOW(),NOW())";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(":userid", $user->getUserid());
		$stmt->bindValue(":username", $user->getUsername());
		$stmt->bindValue(":email", $user->getEmail());
		$stmt->bindValue(":password", $user->getPassword());
		$stmt->bindValue(":token", $user->getToken());
		// $stmt->bindValue(":dateCreated", $user->getDateCreated());
		// $stmt->bindValue(":dateModified", $user->getDateModified());
		return $stmt->execute();
		echo "user created";	

		// $user = $stmt->fetchObject("\Entity\User");
		// return $userId;
	}
	public function deleteUser($userId)
	{
		// $pdo = Db::getPdo();
		// $sql = "SELECT * FROM user 
		// 		WHERE userId = :userId";	
		// $stmt = $pdo->prepare($sql);
		// $stmt->bindParam(":userId", $userId);
		// $stmt->execute();	
		// $userId = $stmt->fetchObject("\Entity\User");
		// return $userId;
	}
	public function udpateUser($userId)
	{
		// $pdo = Db::getPdo();
		// $sql = "SELECT * FROM user 
		// 		WHERE userId = :userId";	
		// $stmt = $pdo->prepare($sql);
		// $stmt->bindParam(":userId", $userId);
		// $stmt->execute();	
		// $userId = $stmt->fetchObject("\Entity\User");
		// return $userId;
	}
}
