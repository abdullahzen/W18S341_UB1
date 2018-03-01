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

    public static function getUserDataFromDB($arg)
    {
        if (session()->has('username')){
            $username = session()->get('username');

            $result = DB::select('select ' . $arg . ' from User where User.username = \'' . $username . '\'');

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

            $result = DB::select('select ' . $arg . ' from Question q inner join User u on q.user_ID = u.user_ID where u.username = \'' . $username . '\'');

            if(!empty($result))
                $result = $result[0];

            foreach ($result as $key => $value){
                $arg = $value;
            }
            return $arg;
        }
        return 'N/A';
    }
}