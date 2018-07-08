<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DalsiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertFalse(false);
    }

    public function testBasicDalsi()
    {
        $this->assertEquals('a', 'ba');
    }

    public function testEsteJeden() {
        $this->assertTrue(true);
    }
}
