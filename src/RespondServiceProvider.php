<?php

namespace Anetwork\Respond;

use Illuminate\Support\ServiceProvider;

class RespondServiceProvider extends ServiceProvider
{
	/**
	* Perform post-registration booting of services.
	*
	* @return void
	*/
	public function boot()
	{

		$lang = \App::getLocale();

		$this->publishes([
			__DIR__.'/../errors/lang/' . $lang . '.php' => config_path( $lang . '.php' ),
		]);

	}


	/**
	* Register any package services.
	*
	* @return void
	*/
	public function register()
	{

		$this->registerMessages();

	}

	private function registerMessages()
	{

		$this->app->bind( 'Anetwork\Respond\Messages', function() {

			return new Messages();

		});

	}

}
