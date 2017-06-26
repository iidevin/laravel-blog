<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('user/profile1');
});

Route::get('foo', function () {
	config(['app.timezone' => 'America/Chicago']);
	$value = config('app.timezone');
    return $value;
});

Route::get('user/profile1', 'UserController@showProfile')->name('profile1');
Route::get('user/profile2', 'UserController@getAll');
Route::get('user/index', 'UserController@index');
Route::get('user/show/{id}', 'UserController@show');
Route::any('post/create', 'PostController@create');
Route::any('post/store', 'PostController@store');

Route::group(['middleware' => 'auth'], function () {

});
//绑定路由中间件
Route::get('user/profile1', function () {
        return 'sucess!';
    })->middleware('checkage');

Route::resource('photos', 'PhotoController');

Route::auth();

Route::get('/home', 'HomeController@index');
