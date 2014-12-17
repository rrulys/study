<?php

class InternalController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('home.index');
	}

	public function getPlayer($player, $region) {
		$api = new Riot($player, $region);	
		$data['player'] = $api->user;
		if ($api->user) { 
			if (SearchLog::where(['username' => $api->user['name']])->count() < 1) {
				SearchLog::create(['username' => $api->user['name']]);
			}
		}
		$data['stats'] = $api->user ? $api->stats() : [];
		return View::make('internal.player', $data);
	}

	public function autocomplete() {
		$phrase = Input::get('term').'%';
		$log = SearchLog::where('username', 'like', $phrase)->lists('username');
		return Response::json($log);
	}
}
