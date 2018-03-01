<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/14/2018
 * Time: 2:56 PM
 */

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use DB;

class ClientController extends Controller {
    public function authenticate(Request $request) {
        $username = $request->input('username');
        $pw = $request->input('password');

        $user = DB::table('user')
                    ->where('username', $username)
                    ->first();
//CHECK RAW PW FOR TESTING PURPOSE
        /*if(!empty($user) && $pw == $user->password) {*/
        if(!empty($user) && Hash::check($pw, $user->password)) {
            $this->createSession($user);
        } else {
            abort(400, "Invalid username or password.");
        }
        return view('pages.homepage');
    }

    public function hash($password) {
        return Hash::make($password);
    }

    public function createSession($user) {
        session()->flush();
        session(['id' => $user->user_ID]);
        session(['email' => $user->email]);
        session(['username' => $user->username]);
    }

    public function postQuestion(Request $request) {
        $question = $request->input('title');
        $category = $request->input('category');
        $user_ID = session()->get('id');

        $result = DB::select('select category from category');
        $exists = false;

        foreach ($result as $key => $value){
            if ($category == $value->category){
                $exists = true;
            }
        }

        if (!$exists){
            DB::table('category')->insert(array("category" => $category));
        }

        $category_ID = DB::select('select category_ID from category where category.category = \'' . $category . '\'')[0]->category_ID;

        if(DB::table('question')->insert(
            array("question" => $question, "category_ID1" => $category_ID, "user_ID1" => $user_ID)
        )) {
            return view('pages.homepage');
        } else {
            return abort('400');
        }
    }
  
    public function register(Request $request){
        $username = $request->Input('username');
        $email = $request->Input('email');
        $password = $request->Input('password');
        $newPassword = $this->hash($password);
        if($this->insertRegisterToDB($username, $email, $newPassword)){
            return "SUCCESS";
        } else{
            return abort('400', 'A problem occurred during the registration process!');
        }
    }

    public function insertRegisterToDB($username, $email, $password)
    {
        /*$solve = '0';*/
        return DB::table('user')->insert(
            array("username" => $username, "email" => $email, "password" => $password /*"is_Solver" => $solve*/)
        );
    }
}