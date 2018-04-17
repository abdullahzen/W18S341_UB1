<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Hash;
use DB;

class LoginUnitTests extends TestCase
{
    use DatabaseMigrations;



    public function testLogin(){
        $this->post('/register', ['username' => 'testUser', 'password' => 'myPassword', 'email' => 'myemail@gmail.com']);
        $this->post('/login', ['username' => 'testUser', 'password' => 'myPassword']);
        if (session()->get('username') == 'testUser' ){
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }

    public function testLoginAdmin(){
        session()->flush();
        $this->post('/register', ['username' => 'admin', 'password' => '123abc', 'email' => 'myemail@gmail.com']);
        $this->post('/login', ['username' => 'admin', 'password' => '123abc']);
        if (session()->get('username') == 'admin' ){
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }

}
