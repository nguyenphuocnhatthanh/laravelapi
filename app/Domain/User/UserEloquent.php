<?php
namespace App\Domain\User;

class UserEloquent extends AbstractRepository implements UserInterface {

	protected $model;

	public function __construct(app\User $user)
	{
		$this->model = $user;
	}
}