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
 	
Route::get( 'blog', 'BlogController@index' );
Route::get( 'prabhat', 'PrabhatController@index' );
Route::get('dashboard', array('before' => 'auth', function()
{
    return View::make('dashboard');
}));
Route::get('/login', function()
{
    return View::make('login');
});
 
Route::post('/login', function()
{
    // Validation later - for now let’s just get the creds
    Auth::attempt(
        array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        )
    );
 
    return Redirect::to('dashboard');
});
 
Route::get('/logout', function()
{
    Auth::logout();
    
    return View::make('logout');
});
Route::resource('userspra', 'UserpraController');

// API ROUTES ==================================  
Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('comments', 'CommentController', 
        array('only' => array('index', 'store', 'destroy')));
  
});

// CATCH ALL ROUTE =============================  
// all routes that are not home or api will be redirected to the frontend 
// this allows angular to route them 
App::missing(function($exception) { 
    return View::make('index'); 
});
Route::get('/home', function()
{
   
    
    return View::make('home');
});
