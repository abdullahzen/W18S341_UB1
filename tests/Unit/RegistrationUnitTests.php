<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Hash;
use DB;

class RegistrationUnitTests extends TestCase
{
    use DatabaseMigrations;



    public function testRegister(){
        $this->post('/register', ['username' => 'testUser', 'password' => 'myPassword', 'email' => 'myemail@gmail.com']);
        $this->assertDatabaseHas('user', ['username' => 'testUser']);
    }

    public function testRegisterUser2(){
        $this->post('/register', ['username' => 'testUser2', 'password' => 'myPassword', 'email' => 'myemail2@gmail.com']);
        $this->assertDatabaseHas('user', ['username' => 'testUser2']);
    }

}
