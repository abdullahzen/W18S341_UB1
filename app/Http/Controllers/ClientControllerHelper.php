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

class ClientControllerHelper extends Controller {

    static $canVote = -1;

    public static function getUserDataFromDB($arg)
    {
        if (session()->has('username')){
            $username = session()->get('username');

            $result = DB::select('select ' . $arg . ' from user where user.username = \'' . $username . '\'');

            if(!empty($result))
                $result = $result[0];

            foreach ($result as $key => $value){
                $arg = $value;
            }
            return $arg;
        }
        return 'N/A';
    }

    public static function getQuestionDataFromDBForCurrentUser($arg)
    {
        if (session()->has('username')){
            $username = session()->get('username');

            $result = DB::select('select ' . $arg . ' from question q inner join User u on q.user_ID = u.user_ID where u.username = \'' . $username . '\'');

            if(!empty($result))
                $result = $result[0];

            foreach ($result as $key => $value){
                $arg = $value;
            }
            return $arg;
        }
        return 'N/A';
    }


    public static function incrementUpvotes($id) {
        DB::table('question')->where('question_ID', $id)->increment('upvotes', 1);
        return redirect('/post/' . $id . '');
    }

    public static function decrementUpvotes($id) {
        DB::table('question')->where('question_ID', $id)->increment('upvotes', -1);
        return redirect('/post/' . $id . '');
    }
}