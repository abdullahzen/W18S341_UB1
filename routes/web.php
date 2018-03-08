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


Route::get('/newpost', function () {
    return view('pages.newquestion');
});

Route::get('/logout', function() {
    session()->flush();
    return redirect('/');
});

Route::get('/userProfile', function() {
    session()->flush();
    return view('pages.userProfile');
});

Route::get('/post/{id}', array(
    'uses' => 'ClientController@getFullPostById'
));

Route::get('/post/{id}/favourite', array(
    'uses' => 'ClientController@favourite'
));

Route::get('/favourites', array(
    'uses' => 'ClientController@getFavourites'
))->middleware('checkLoggedIn');



//POST
Route::get('/login', 'ClientController@authenticate');
Route::get('/newpost/do', 'ClientController@postQuestion');
Route::get('/register', 'ClientController@register');
Route::get('/post/{id}/newanswer', 'ClientController@postAnswer');
Route::get('/edit', 'ClientController@editQuestion');
Route::get('/editProfile', 'ClientController@updateUserProfile');


