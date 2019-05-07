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

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/test', function()
{
    return View::make('tools.test');
});
Route::any('/index', 'IndexController@index');

Route::get('/testapi', function()
{
    return View::make('tools.test');
});
//Route::get('/index', 'IndexController@index');

Route::get('user/profile', array('as' => 'profile', function()
{
    //
    return 'hello';
}));

