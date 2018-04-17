<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Hash;
use DB;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;



    public function testRegister(){
        $this->post('/register', ['username' => 'testUser', 'password' => 'myPassword', 'email' => 'myemail@gmail.com']);
        $this->assertDatabaseHas('user', ['username' => 'testUser']);
    }

    public function testLogin(){
        $this->post('/register', ['username' => 'testUser', 'password' => 'myPassword', 'email' => 'myemail@gmail.com']);
        $this->post('/login', ['username' => 'testUser', 'password' => Hash::make('myPassword')]);
        $this->assertDatabaseHas('user', ['username' => 'testUser']);
    }

    /*public function testPost(){
        $this->post('/register', ['username' => 'testUser', 'password' => 'myPassword', 'email' => 'myemail@gmail.com']);
        $this->post('/login', ['username' => 'testUser', 'password' => Hash::make('myPassword')]);
        $user = DB::table('user')->where('username', 'testUser')->first();
        session()->flush();
        session(['id' => $user->user_ID]);
        session(['email' => $user->email]);
        session(['username' => $user->username]);
        $this->post('/newpost/do', ['title' => 'TestQuestion', 'content' => 'testing content', 'category' => 'Java', 'newOther2' => '']);
        $this->assertDatabaseHas('question', ['title' => 'TestQuestion']);
    }*/



/*    public function testRegister(){
        $this->assertDatabaseHas('user', ['username' => 'testuser', 'password' => Hash::make('123test')]);
    }*/
}
