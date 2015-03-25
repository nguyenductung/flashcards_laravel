<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FlashCard extends Model {

	protected $fillable = ['word', 'pronunciation', 'meaning', 'language'];

	public static $languages = ["English" => "English", "Japanese" => "Japanese"];

	public static function getByLanguage($language = NULL)
	{
		switch (strtolower($language)) {
			case 'en':
			case 'eng':
			case 'english':
				return self::where('language', 'English')->get();
			case 'ja':
			case 'jp':
			case 'jap':
			case 'japanese':
				return self::where('language', 'Japanese')->get();
			default:
				return self::all();
		}
	}

}
