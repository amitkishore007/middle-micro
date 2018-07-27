<?php 

namespace App\B2c\Repositories\Providers;

use Illuminate\Support\ServiceProvider;


/**
 * B2c Service Provider extending Service Provider
 */
class B2cServiceProvider extends ServiceProvider
{
	public function register()
	{
		// $this->app->bind(Interface, Model );
	
		$this->app->bind(
            'App\B2c\Repositories\Contracts\UserInterface',
            'App\B2c\Repositories\Entities\User\UserRepository'
        ); 

	}
}