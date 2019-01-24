<?php

namespace NayWin\Pkg4Lara;

use Illuminate\Support\ServiceProvider;

class Pkg4LaraServiceProvider extends ServiceProvider
{
	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
    */
	public function boot()
	{
		$this->loadMigrationsFrom(__DIR__ . '/database/migrations');
	}

	/**
     * Register the application services.
     *
     * @return void
     */
	public function register()
	{
		$this->app->singleton(Pkg4LaraGenerator::class, function() {
			return new Pkg4LaraGenerator();
		});

		$this->app->alias(Pkg4LaraGenerator::class, 'pkg4lara');
	}
}