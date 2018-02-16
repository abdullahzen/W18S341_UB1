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

    public static $middleware2 = [];

    public static function getFromDB($arg)
    {
        if (session()->has('username')){
            $username = '';
            foreach (ClientControllerHelper::$middleware2 as $key => $value) {
                $username = $value;
            }

            $result = DB::select('select ' . $arg . ' from user where user.username = \'' . $username . '\'')[0];

            foreach ($result as $key => $value){
                $arg = $value;
            }

            return $arg;
        }
        return 'N/A';
    }
}