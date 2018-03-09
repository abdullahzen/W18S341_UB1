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

    static $currentQuestionID = '0';

    public static function setQuestionID($id){
        ClientControllerHelper::$currentQuestionID = $id;
    }

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

            $result = DB::select('select ' . $arg . ' from question q inner join user u on q.user_ID1 = u.user_ID where u.username = \'' . $username . '\'');

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
            FROM questionvote v
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
            FROM questionvote v
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

    public static function checkUpvotesA($id){
        $vote = DB::select('
            SELECT 
                vote
            FROM answervote v
            INNER JOIN user u
            INNER JOIN answer a
                ON v.user_ID5 = u.user_ID AND v.answer_ID1 = a.answer_ID
            WHERE u.username = \'' . session()->get('username') . '\' AND v.answer_ID1 = \'' . $id . '\'');
        if ($vote == null){
            return 'default';
        } else if ($vote[0]->vote == 1) {
            return 'warning';
        } else {
            return 'light';
        }
    }

    public static function checkDownvotesA($id)
    {
        $vote = DB::select('
            SELECT 
                vote
            FROM answervote v
            INNER JOIN user u
            INNER JOIN answer a
                ON v.user_ID5 = u.user_ID AND v.answer_ID1 = a.answer_ID
            WHERE u.username = \'' . session()->get('username') . '\' AND v.answer_ID1 = \'' . $id . '\'');
        if ($vote == null) {
            return 'default';
        } else if ($vote[0]->vote == 0) {
            return 'error';
        } else {
            return 'light';
        }
    }
      
    public static function getQuestionDataFromDBForCurrentQuestion($arg, $id)
    {
        if (session()->has('username')){
            $username = session()->get('username');

            $result = DB::select('select ' . $arg . ' from question q inner join user u on q.user_ID1 = u.user_ID where u.username = \'' . $username . '\' 
             AND q.question_ID = \'' . $id . '\'');

            if(!empty($result))
                $result = $result[0];

            foreach ($result as $key => $value){
                $arg = $value;
            }
            return $arg;
        }
        return 'N/A';
    }

    public static function getCategoryName($id){
        if (session()->has('username')){
            if ($id == '0' || $id == null){
                return;
            }
            $id2 = ClientControllerHelper::getQuestionDataFromDBForCurrentQuestion('category_ID1', $id);
            $result = DB::select('select category from category where category.category_ID = \'' . $id2 . '\'');
            if ($result != null){
                return $result[0]->category;
            }
        }
        return;
    }

    public static function getTopQuestionsByUpvotes($language){
        $post = DB::select('select * from question q inner join category t on q.category_ID1 = t.category_ID 
                      where t.category = \'' . $language  .'\' order by q.upvotes DESC');
        return $post;
    }
}