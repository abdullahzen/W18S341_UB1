<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use DB;

class ExampleTest extends DuskTestCase
{


    public function testBasicExample()
    {
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration.");
        }

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertTitleContains('ProgramOverflew');
        });
    }
}
