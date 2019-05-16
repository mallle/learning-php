<?php 

namespace App\Core;

use PDO;

abstract class AbstractRepository
{

	private $pdo;

	public function __construct(PDO $pdo){

		$this->pdo = $pdo;
	} 


	abstract public function getTableName();

	abstract public function getModelName();

	function all()
	{
		$table = $this->getTableName();
		$stmt = $this->pdo->query("SELECT * FROM $table");
		$model = $this->getModelName();
		$post = $stmt->fetchAll(PDO::FETCH_CLASS, $model);
		return ($post);
	}

	function find($id)
	{
		$table = $this->getTableName();
		$stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE id = :id");
		$stmt->execute(['id' => $id]);
		$model = $this->getModelName();
		$stmt->setFetchMode(PDO::FETCH_CLASS, $model);
		$post = $stmt->fetch(PDO::FETCH_CLASS);

		return $post;
	}

}



?>