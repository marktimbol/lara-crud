<?php

namespace App\Acme\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

	public function register() {

		$this->app->bind(
			'App\Acme\Repositories\User\UserRepositoryInterface',
			'App\Acme\Repositories\User\UserRepository'
		);	

														
	}

}