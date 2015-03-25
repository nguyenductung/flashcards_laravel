<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class FlashCardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$flashCards = \App\FlashCard::getByLanguage(Request::input('lang'));
		$flashCards = $flashCards->shuffle();
		return view('flash_cards.index', ['flashCards' => $flashCards]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$flashCards = \App\FlashCard::getByLanguage(Request::input('lang'));
		$flashCards = $flashCards->shuffle()->take(10);
		return view('flash_cards.create', ['flashCards' => $flashCards]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$flashCard = \App\FlashCard::create([
			'word'          => Request::input('word'),
			'pronunciation' => Request::input('pronunciation'),
			'meaning'       => Request::input('meaning'),
			'language'      => Request::input('language')
		]);
		return Redirect::to(action('FlashCardController@show', $flashCard->id));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$flashCard  = \App\FlashCard::find($id);
		$flashCards = \App\FlashCard::getByLanguage(Request::input('lang'));
		$flashCards = $flashCards->except($id)->shuffle()->take(10);
		return view('flash_cards.show', ['flashCard' => $flashCard, 'flashCards' => $flashCards]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
