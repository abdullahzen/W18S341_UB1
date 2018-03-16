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

Route::get('/', function(){
    return view('pages.homepage');
});


Route::get('/newpost', function () {
    return view('pages.newquestion');
});

Route::get('/newCat', function (){
    return view('pages.newCategory');
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

Route::get('/search/{id}', array(
    'uses' => 'ClientController@getSearch'
));

Route::get('/post/{id}/upvote', 'ClientController@upvote');
Route::get('/post/{id}/downvote', 'ClientController@downvote');
Route::get('/post/{id}/{id2}/upvoteA', 'ClientController@upvoteA');
Route::get('/post/{id}/{id2}/downvoteA', 'ClientController@downvoteA');
Route::get('/post/{id}/delete', 'ClientController@deleteQuestion');
Route::get('/post/bestanswer/{qid}/{aid}/', 'ClientController@setBestAnswer');
Route::get('/post/unbestanswer/{qid}/{aid}/', 'ClientController@unsetBestAnswer');
Route::get('/addNewCategory', 'ClientController@saveCategory');



//POST
Route::post('/login', 'ClientController@authenticate');
Route::post('/newpost/do', 'ClientController@postQuestion');
Route::post('/register', 'ClientController@register');
Route::post('/post/{id}/newanswer', 'ClientController@postAnswer');
Route::post('/edit', 'ClientController@editQuestion');
Route::post('/editProfile', 'ClientController@updateUserProfile');

