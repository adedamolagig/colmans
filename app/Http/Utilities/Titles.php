<?php

namespace App\Http\Utilities;

class Titles{
	Protected static $titles = [
		"Mr." 		=> "Mister",
		"Mrs."		=> "Misses",
		"Miss"		=> "Miss",
		"Prof"		=> "Professor",
		"Dr"		=> "Doctor",
		"Chief"			=> "Chief",
		"Reverend"		=> "Rev",
		"Pastor"		=> "Past"
	];

	public static function all()
	{
		return array_keys(static::$titles);
	}
}