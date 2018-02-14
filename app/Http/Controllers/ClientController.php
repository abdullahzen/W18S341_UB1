<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/14/2018
 * Time: 2:56 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class ClientController extends Controller {
    function authenticate(Request $request) {
        $username = $request->input('username');
        $pw = $request->input('password');

        $user = DB::table('user')
                    ->where('username', $username)
                    ->first();

        if(!empty($user) && Hash::check($pw, $user->password)) {
            $this->createSession($user);
            dd(session());
        } else {
            abort(400, "Invalid username or password.");
        }

        return null;
    }

    public function hash($password) {
        return Hash::make($password);
    }

    function createSession($user) {
        session()->flush();
        session(['id' => $user->id]);
        session(['email' => $user->email]);
        session(['username' => $user->username]);
    }
}