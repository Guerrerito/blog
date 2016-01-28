<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
type route 
GET, POST, PUT , DELETE
*/
Route::get('/', function(){
	return view('test.index');
});

Route::group(['prefix'=>'articles'], function(){
	Route::get('view/{id?}',[
			'uses'=>'TestController@view',
			'as' => 'articlesView'
		]);

});
Route::resource('/article','TestController');
/**/
Route::group(['prefix'=>'admin'], function(){

	Route::resource('users','UsersController');

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
