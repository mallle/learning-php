<?php

namespace App\Core;

use PDO;
use PDOException;
use App\Post\PostsRepository;
use App\Post\PostsController;
use App\Post\PostsAdminController;


use App\Comment\CommentsRepository;

use App\User\UsersRepository;
use App\User\LoginController;
use App\User\LoginService;


class Container
{

	private $recipes = [];
	private $instances = [];


	public function __construct()
	{
		$this->recipes = [
			'postsAdminController' => function(){
				return new PostsAdminController(
					$this->make('postsRepository'),
					$this->make('loginService')
				);
			},
			'loginService' => function(){
				return new LoginService(
					$this->make('usersRepository')
				);
			},
			'postsController' => function(){
				return new PostsController(
					$this->make('postsRepository'),
					$this->make('commentsRepository')
				);
			},
			'postsRepository' => function() {
				return new PostsRepository(
				  $this->make("pdo")
				);
			},
			'commentsRepository' => function() {
				return new CommentsRepository(
				  $this->make("pdo")
				);
			},
			'usersRepository' => function() {
				return new UsersRepository(
				  $this->make("pdo")
				);
			},
			'loginController' => function(){
				return new LoginController(
					$this->make('loginService')
				);
			},
			'pdo' => function(){
				try {
					$pdo = new PDO(
						'mysql:host=localhost;dbname=blog;charset=utf8', 
						'root', 
						''
					);

				} catch (PDOException $e) {
					
					Echo ("es ist ein fehler aufgetraten");
					die();
				}

				$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				return $pdo;
			
			}
		];
	}

  public function make($name)
  {
    if (!empty($this->instances[$name]))
    {
      return $this->instances[$name];
    }

    if (isset($this->recipes[$name])) {
      $this->instances[$name] = $this->recipes[$name]();
    }

    return $this->instances[$name];
  }


	// private $pdo;
	// private $postsRepository;

	// public function getPdo()
	// {
	// 	if(!empty($this->pdo)){
	// 		return $this->pdo;
	// 	}
	// 	$this->pdo = new PDO(
	// 		'mysql:host=localhost;dbname=blog;charset=utf8', 
	// 		'root', 
	// 		''
	// 	);
	// 	$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	// 	return $this->pdo;	
	// }
	
	// public function getPostsRepository()
	// {
	// 	if(!empty($this->postsRepository))
	// 	{
	// 		return $this->postsRepository;
	// 	}
	// 	$this->postsRepository =  new PostsRepository($this->getPdo());

	// 	return $this->postsRepository;
	// }
}

?>