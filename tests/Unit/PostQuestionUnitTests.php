<?php

namespace Tests\Unit;

use App\Http\Controllers\ClientControllerHelper;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Hash;
use DB;

class PostQuestionUnitTests extends TestCase
{
    use DatabaseMigrations;


    public function testPostQuestion(){
        $this->post('/register', ['username' => 'testUser', 'password' => 'myPassword', 'email' => 'myemail@gmail.com']);
        $this->post('/login', ['username' => 'testUser', 'password' => 'myPassword']);
        $this->call('GET', '/newpost')->assertViewIs('pages.newquestion');
        $this->call('GET', '/newpost/doTest', ['title' => 'tesQuestion', 'content' => 'some contents', 'category' => 'Laravel']);
        if (session()->get('username') == 'testUser' ){
            $this->assertDatabaseHas('question', ['title' => 'tesQuestion']);
            $this->assertDatabaseHas('category', ['category' => 'Laravel']);
        } else {
            $this->assertTrue(false);
        }
    }
}
