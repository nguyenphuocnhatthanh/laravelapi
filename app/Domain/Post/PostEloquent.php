<?php
namespace App\Domain\Post;

use App\Domain\AbstractRepository;
use App\Post;

class PostEloquent extends AbstractRepository implements PostInterface
{
	protected $model;

	public function __construct(Post $post)
	{
		$this->model = $post;
	}
}