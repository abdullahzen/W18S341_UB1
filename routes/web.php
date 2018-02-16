<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//GET

Route::get('/', array(
    'uses' => 'ClientController@getHomepage'
));

Route::post('/logout', function() {
    session()->flush();
    return view('pages.homepage');
});

//POST

Route::get('/login', 'ClientController@authenticate');

Route::get('/register', 'ClientController@register');

