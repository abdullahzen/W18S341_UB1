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

    public static function checkUpvotes($id){
        $vote = DB::select('
            SELECT 
                vote
            FROM vote v
            INNER JOIN user u
            INNER JOIN question q
                ON v.user_ID4 = u.user_ID AND v.question_ID3 = q.question_ID
            WHERE u.username = \'' . session()->get('username') . '\' AND v.question_ID3 = \'' . $id . '\'');
        if ($vote == null){
            return 'default';
        } else if ($vote[0]->vote == 1) {
            return 'warning';
        } else {
            return 'light';
        }
    }

    public static function checkDownvotes($id){
        $vote = DB::select('
            SELECT 
                vote
            FROM vote v
            INNER JOIN user u
            INNER JOIN question q
                ON v.user_ID4 = u.user_ID AND v.question_ID3 = q.question_ID
            WHERE u.username = \'' . session()->get('username') . '\' AND v.question_ID3 = \'' . $id . '\'');
        if ($vote == null){
            return 'default';
        } else if ($vote[0]->vote == 0) {
            return 'error';
        } else {
            return 'light';
        }
    }
}