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
        if(!empty($user) && $pw == $user->password) {
        /*if(!empty($user) && Hash::check($pw, $user->password)) {*/
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
}