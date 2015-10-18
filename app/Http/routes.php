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
    return view('home');
});

//ipsum routes
//ipsum get route - Just loads the template but still points to controller for future enhancement
Route::get('/ipsum', 'IpsumController@getPage');
//IPSUM POST ROUTE - - Performs validation and returns data to blade template
Route::post('/ipsum', 'IpsumController@postPage');


//user generator routes
//user generator get route- Just loads the template but still points to controller for future enhancement
Route::get('/usergen', 'UsergenController@getPage');
//user generator route - Performs validation and returns data to blade template
Route::post('/usergen', 'UsergenController@postPage');

/*
Route::get('/usergen', function() {
    return view('usergen');

});
*/