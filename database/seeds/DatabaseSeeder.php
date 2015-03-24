<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('FlashCardTableSeeder');
		$this->command->info('Flash cards seeded.');
	}

}

class FlashCardTableSeeder extends Seeder {

  public function run()
  {
    DB::table('flash_cards')->delete();

    App\FlashCard::create([
    	'word' => 'おはよう',
    	'meaning' => 'good morning',
    	'pronunciation' => 'ohayou',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => 'こんにちは',
    	'meaning' => 'good afternoon',
    	'pronunciation' => 'konnichiwa',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => 'こんばんは',
    	'meaning' => 'good evening',
    	'pronunciation' => 'konbanwa',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => 'ありがとう',
    	'meaning' => 'thank you',
    	'pronunciation' => 'arigatou',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => 'ごめんなさい',
    	'meaning' => 'I\'m sorry',
    	'pronunciation' => 'gomennasai',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => 'はは',
    	'meaning' => 'mother',
    	'pronunciation' => 'haha',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => 'ちち',
    	'meaning' => 'father',
    	'pronunciation' => 'chichi',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => '兄',
    	'meaning' => 'brother',
    	'pronunciation' => 'ani',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => '姉',
    	'meaning' => 'sister',
    	'pronunciation' => 'ane',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => '子供',
    	'meaning' => 'children',
    	'pronunciation' => 'kodomo',
    	'language' => 'Japanese'
    ]);
    App\FlashCard::create([
    	'word' => 'pejorative',
    	'meaning' => 'expressing contempt or disapproval',
    	'pronunciation' => '/pəˈjôrədiv/',
    	'language' => 'English'
    ]);
    App\FlashCard::create([
    	'word' => 'benign',
    	'meaning' => 'kind and gentle; not hurting anybody',
    	'pronunciation' => '/bɪˈnaɪn/',
    	'language' => 'English'
    ]);
    App\FlashCard::create([
    	'word' => 'slavishly',
    	'meaning' => 'in a way that follows or copies somebody/something exactly without having any original thought at all',
    	'pronunciation' => '/ˈsleɪvɪʃli/',
    	'language' => 'English'
    ]);
    App\FlashCard::create([
    	'word' => 'thoroughly',
    	'meaning' => 'very much; completely',
    	'pronunciation' => '/ˈθʌrəli/',
    	'language' => 'English'
    ]);
    App\FlashCard::create([
    	'word' => 'vigilant',
    	'meaning' => 'very careful to notice any signs of danger or trouble',
    	'pronunciation' => '/ˈvɪdʒɪlənt/',
    	'language' => 'English'
    ]);
    App\FlashCard::create([
    	'word' => 'yearn',
    	'meaning' => 'to want something very much, especially when it is very difficult to get',
    	'pronunciation' => '/jɜːn/',
    	'language' => 'English'
    ]);
    App\FlashCard::create([
    	'word' => 'intruder',
    	'meaning' => 'a person who enters a building or an area illegally',
    	'pronunciation' => '/ɪnˈtruːdə(r)/',
    	'language' => 'English'
    ]);
    App\FlashCard::create([
    	'word' => 'inevitably',
    	'meaning' => 'as is certain to happen',
    	'pronunciation' => '/ɪnˈevɪtəbli/',
    	'language' => 'English'
    ]);
    App\FlashCard::create([
    	'word' => 'sophisticated',
    	'meaning' => 'having a lot of experience of the world and knowing about fashion, culture and other things that people think are socially important',
    	'pronunciation' => '/səˈfɪstɪkeɪtɪd/',
    	'language' => 'English'
    ]);
    App\FlashCard::create([
    	'word' => 'painstakingly',
    	'meaning' => 'in a way that takes a lot of care, effort and attention to detail',
    	'pronunciation' => '/ˈpeɪnzteɪkɪŋli/',
    	'language' => 'English'
    ]);
  }

}
