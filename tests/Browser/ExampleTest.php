<?php

namespace Tests\Browser;

use Tests\Browser\Pages\homepage;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use DB;


class ExampleTest extends DuskTestCase
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
            $browser->assertSee('Java');

        });
    }

    public function testNewPost(){
        $this->checkDbConnection();
        $this->prepare();
        $this->browse(function (Browser $browser){
           $browser->visit(new homepage());
           $browser->clickLink('/newPost');
           $browser->for
        });
    }
}
