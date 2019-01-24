<?php

namespace NayWin\Pkg4Lara;

class Pkg4LaraGenerator
{
	public static function show_my_codename($name)
	{
		return bin2hex($name);
	}
}