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

    //Login Stuff
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

    //Register Stuff
    public function createSession($user) {
        session()->flush();
        session(['id' => $user->user_ID]);
        session(['email' => $user->email]);
        session(['username' => $user->username]);
        ClientControllerHelper::$middleware2 = ['username' => $user->username];
    }

    public function postQuestion(Request $request) {
        $question = $request->input('title');
        $answer_ID = 0;
        $answer = $request->input('question');
        $category = $request->input('category');
        $user_ID = session()->get('id');

        if(DB::table('question')->insert(
            array("question" => $question, "answer_ID" => $answer_ID, "answer" => $answer, "category" => $category, "user_ID" => $user_ID)
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
            return view('pages.homepage');
        } else{
            return abort('400', 'A problem occurred during the registration process!');
        }
    }

    public function insertRegisterToDB($username, $email, $password) {
        $solve = '0';
        return DB::table('user')->insert(
            array("username" => $username, "email" => $email, "password" => $password, "is_Solver" => $solve)
        );
    }

    //Display homepage stuff


    public function getHomepage() {
        //Get posts stuff
        $java = $this->getPostsByCategoryQuery(1);
        $js = $this->getPostsByCategoryQuery(1);
        $php = $this->getPostsByCategoryQuery(2);
        $c = $this->getPostsByCategoryQuery(3);

        return view('pages.homepage', ['java' => $java, 'js' => $js, 'php' => $php, 'c' => $c]);
    }

    public function getPostsByCategoryQuery($category) {
        $post = DB::select('
            SELECT 
                q.question_ID, 
                q.question,
                q.answer_ID,
                q.answer,
                q.category,
                q.user_ID as userID,
                u.username
            FROM question q
            INNER JOIN user u
                ON q.user_ID = u.user_ID AND q.category = ' . $category
        );

        return $post;
    }
}