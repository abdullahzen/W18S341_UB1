<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Hash;

class ExampleTest extends TestCase
{
    public function testPostNewQuestion(){
        $this->assertDatabaseHas('question', ['title' => 'This is a test question', 'content' => 'What are the possibilities of failing?']);
    }

    public function testLogin(){
        $this->assertDatabaseHas('user', ['username' => 'admin', 'password' => Hash::make('123abc')]);
    }

/*    public function testRegister(){
        $this->assertDatabaseHas('user', ['username' => 'testuser', 'password' => Hash::make('123test')]);
    }*/
}
