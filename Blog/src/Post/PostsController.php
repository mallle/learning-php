<?php

namespace App\Post;

use App\Core\AbstractController;

class PostsController extends AbstractController
{

	public function __construct(Postsrepository $postsrepository)
	{
		$this->postsrepository = $postsrepository;
	}

	public function index()
	{
		$posts = $this->postsrepository->all();

		$this->render("post/index", [
			'posts' => $posts
		]);
		
	}

	public function show()
	{
		$id = $_GET['id'];
  		$post = $this->postsrepository->find($id);

		$this->render("post/show", [
			'post' => $post
		]);

	}
}