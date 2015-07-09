<?php
namespace App\Domain;

use App\Domain\User;
use App\Post;
use App\Domain\Post\PostEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{
	
	public function register()
	{
		/*$this->app->bind(UserInterface::class, function() {
			return new UserEloquent(User::class);
		});*/

		$this->app->bind('App\Domain\Post\PostInterface', function() {
			return new PostEloquent(new Post());
		});
	}
}