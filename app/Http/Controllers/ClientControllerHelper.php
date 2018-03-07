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
            if ($id == '0'){
                return;
            }
            $idd = ClientControllerHelper::getQuestionDataFromDBForCurrentQuestion('category_ID1', $id);
            return DB::select('select category from category where category.category_ID = \'' . $idd . '\'')[0]->category;
        }
        return;
    }
}