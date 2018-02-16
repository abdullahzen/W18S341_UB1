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

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/post', function () {
    return view('pages.newquestion');
});

Route::get('/logout', function() {
    session()->flush();
    return view('pages.homepage');
});

//POST

Route::get('/login', 'ClientController@authenticate');
Route::get('/post/do', 'ClientController@postQuestion');
Route::get('/register', 'ClientController@register');