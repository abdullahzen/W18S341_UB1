<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    public function testPostNewQuestion(){
        $this->assertDatabaseHas('question', ['title' => 'This is a test question', 'content' => 'What are the possibilities of failing?']);
    }
}
