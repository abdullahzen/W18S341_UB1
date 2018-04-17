<?php

namespace Tests\Browser;

use Tests\Browser\Pages\homepage;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use DB;
use Tests\Unit\RegistrationUnitTests;


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
        $this->browse(function (Browser $browser) {
            $browser->visit(new homepage());
            $browser->waitForText('Java',20);
            $browser->assertSee('Java');

        });
    }

    public function testRegister(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser) {
            $browser->visit(new homepage());
            $browser->refresh();
            $browser->click('#registerButton');
            $browser->element('#username')->sendKeys('testuser');
            $browser->element('#email')->sendKeys('\'testuser@gmail.com\'');
            $browser->element('#password')->sendKeys('123test');
            $browser->element('#passwordConfirmation')->sendKeys('123test');
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
    }

    public function testNewPost(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser){
           $browser->visit(new homepage());
           $browser->click('#newPostModalButton');
           $browser->select('category', 'Php');
            $browser->type('title', 'This is a test question');
            $browser->element('#content')->sendKeys('What are the possibilities of failing?');
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

    public function testAnswerQuestion(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser) {
            $browser->visit(new homepage());
            $browser->visit('/post/1');
            $browser->element('#content')->sendKeys('This is an answer');
            $browser->element('#newAnswerButton')->submit();
            $browser->assertSee('This is an answer');
        });
    }

    public function testDisplayPublicProfile(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser) {
            $browser->visit(new homepage());
            $browser->visit('/publicProfile/admin');
            $browser->assertSee('Admin\'s Questions');
        });
    }

    public function testUserProfile(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser){
            $browser->visit(new homepage());
            $browser->click('#userProfileButton');
            $browser->assertSee('Username:');
        });
    }


    public function testAddCategory(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser){
            $browser->visit(new homepage());
            $browser->click('#addCat');
            $browser->element('#newCat')->sendKeys('testL');
            $browser->element('#saveNewCategory')->submit();
            $browser->refresh();
            $browser->assertSee('testL');
        });
    }
}
