<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * @return [type] [description]
	 */
    public function boot()
    {
    	Schema::defaultStringLength(191);
    	\Dusterio\LumenPassport\LumenPassport::routes($this->app, ['prefix' => 'v1/oauth']);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    
    public function register()
    {
        $this->app->register(\App\B2c\Repositories\Providers\B2cServiceProvider::class);
    }
}
