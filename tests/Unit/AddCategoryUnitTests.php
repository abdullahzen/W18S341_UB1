<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Hash;
use DB;

class AddCategoryUnitTests extends TestCase
{
    use DatabaseMigrations;


    public function testAddCategoryOnly(){
        $this->call('GET' , '/addNewCategory', ['newCat' => 'Laravel']);
        $this->assertDatabaseHas('category', ['category' => 'Laravel']);
    }
}
