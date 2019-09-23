<?php

namespace Optimus\Bruno;

use Illuminate\Support\ServiceProvider;

class BrunoServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes(
			[
				__DIR__ . '/config/bruno.php',
			],
			'config'
		);
	}

    /**
     * Merge the default config file with the user's customized config.
     *
     * @return void
     */
    public function register()
    {
    	$this->mergeConfigFrom(__DIR__ . '/config/bruno.php', 'bruno');
    }
}
