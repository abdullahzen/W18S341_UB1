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
        /*if(!empty($user) && $pw == $user->password) {*/
        if(!empty($user) && Hash::check($pw, $user->password)) {
            $this->createSession($user);
        } else {
            abort(400, "Invalid username or password.");
        }
        return redirect('/');
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
    }

    public function postQuestion(Request $request) {
        $title = $request->input('title');
        $content = $request->input('content');
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
            array("title" => $title, "content" => $content, "category_ID1" => $category_ID, "user_ID1" => $user_ID)
        )) {
            return redirect('/');
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
            return redirect('/');
        } else{
            return abort('400', 'A problem occurred during the registration process!');
        }
    }

    public function insertRegisterToDB($username, $email, $password) {
        /*$solve = '0';*/
        return DB::table('user')->insert(
            array("username" => $username, "email" => $email, "password" => $password /*"is_Solver" => $solve*/)
        );
    }

    //Display homepage stuff


    public function getHomepage() {
        //Get posts stuff
        $java = $this->getPostsByCategoryQuery(1);
        $js = $this->getPostsByCategoryQuery(2);
        $php = $this->getPostsByCategoryQuery(3);
        $c = $this->getPostsByCategoryQuery(4);

        return view('pages.homepage', ['java' => $java, 'js' => $js, 'php' => $php, 'c' => $c]);
    }

    public function getPostsByCategoryQuery($category) {
        $post = DB::select('
            SELECT 
                q.question_ID, 
                q.title,
                q.content,
                q.category_ID1,
                q.user_ID1 as userID,
                q.create_time,
                q.upvotes,
                q.comments,
                q.views,
                u.username
            FROM question q
            INNER JOIN user u
                ON q.user_ID1 = u.user_ID AND q.category_ID1 = ' . $category . '
            ORDER BY q.question_ID DESC
        ');

        return $post;
    }

    public function getFullPostById($id) {
        $post = DB::select('
            SELECT 
                q.question_ID, 
                q.title,
                q.content,
                q.category_ID1,
                q.user_ID1 as userID,
                q.create_time,
                q.upvotes,
                q.comments,
                q.views,
                u.username
            FROM question q
            INNER JOIN user u
                ON q.user_ID1 = u.user_ID AND q.question_ID = ' . $id . '
            ORDER BY q.question_ID DESC
        ');

        return view('pages.post', ['post' => $post[0]]);
    }
}