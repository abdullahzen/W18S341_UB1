<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Hash;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;



    public function testRegister(){
        $this->post('/register', ['username' => 'testUser', 'password' => 'myPassword', 'email' => 'myemail@gmail.com']);
        $this->assertDatabaseHas('user', ['username' => 'testUser']);
    }



/*    public function testRegister(){
        $this->assertDatabaseHas('user', ['username' => 'testuser', 'password' => Hash::make('123test')]);
    }*/
}
