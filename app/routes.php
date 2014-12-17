<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'root']);

Route::get('search/getplayer/{player}/{region}', ['uses' => 'InternalController@getPlayer', 'as' => 'internal.getplayer']);
Route::get('search/autocomplete', ['uses' => 'InternalController@autocomplete', 'as' => 'internal.autocomplete']);