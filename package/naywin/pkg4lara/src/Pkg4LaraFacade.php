<?php

namespace NayWin\Pkg4Lara;

use Illuminate\Support\Facades\Facade;

class Pkg4LaraFacade extends Facade
{
	/**
     * Get the registered name of the component.
     *
     * @return string
     */
	protected static function getFacadeAccessor()
	{
		return 'pkg4lara';
	}
}