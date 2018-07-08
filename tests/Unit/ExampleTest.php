<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTrue()
    {
        $this->assertTrue(true);
    }

    public function testFalse()
    {
        $this->assertFalse(false);
    }

    public function testEqual()
    {
        $this->assertEquals('svetsladkostí', "svetsladkostí");
    }

    public function testNotEqual()
    {
        $this->assertNotEquals('svetsladkosti', "svetsladkostí");
    }
}
