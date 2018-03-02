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


Route::get('/post', function () {
    return view('pages.newquestion');
});

Route::get('/logout', function() {
    session()->flush();
    /*'uses' => 'ClientController@getHomepage',*/
    return redirect('/');
});

Route::get('/userProfile', function() {
    session()->flush();
    return view('pages.userProfile');
});

Route::get('/post/{id}', array(
    'uses' => 'ClientController@getFullPostById'
    //'uses' => 'ClientController@getHomepage'
));

//POST

Route::get('/login', 'ClientController@authenticate');
Route::get('/post/do', 'ClientController@postQuestion');
Route::get('/register', 'ClientController@register');
Route::get('/post/{id}/newanswer', 'ClientController@postAnswer');