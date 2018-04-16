<?php

namespace Tests\Browser;

use Tests\Browser\Pages\homepage;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use DB;
use Tests\Unit\ExampleTest;


class UITest extends DuskTestCase
{

    private function checkDbConnection(){
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration.");
        }
    }
    public function testHomePage()
    {

        $this->checkDbConnection();

        $this->prepare();
        $this->startChromeDriver();

        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8080/');
            $browser->waitForText('Java',20);
            $browser->screenshot('sd');
            $browser->assertSee('Java');

        });
    }

    /*public function testRegister(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser) {
            $browser->visit(new homepage());
            $browser->refresh();
            $browser->click('#registerButton');
            $browser->type('username', 'testuser');
            $browser->type('email', 'testuser@gmail.com');
            $browser->type('password', '123test');
            $browser->type('passwordConfirmation', '123test');
            $browser->element('#submitButton')->submit();
            $browser->assertSee('Java');
        });
    }

    public function testLogin(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser) {
            $browser->visit(new homepage());
            $browser->refresh();
            $browser->click('#loginButton');
            $browser->type('username', 'admin');
            $browser->type('password', '123abc');
            $browser->element('#loginSubmitButton')->submit();
            $browser->assertSee('admin');
        });
    }*/

    public function testNewPost(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser){
           $browser->visit(new homepage());
           $browser->click('#loginButton');
           $browser->type('username', 'admin');
           $browser->type('password', '123abc');
           $browser->element('#loginSubmitButton')->submit();
           $browser->click('#newPostModalButton');
           $browser->select('category', 'Php');
           $browser->type('title', 'This is a test question');
           $browser->type('content', 'What are the possibilities of failing?');
           $browser->element('#newQuestionButton')->submit();
           $browser->assertSee('This is a test question');
        });
    }

    public function testDisplayPost(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser) {
            $browser->visit(new homepage());
            $browser->visit('/post/1');
            $browser->assertSee('Test');
        });
    }
}
