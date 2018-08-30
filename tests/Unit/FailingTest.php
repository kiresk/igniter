<?php

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class FailingTest
 * Padajuci test
 * @package Tests\Unit
 */
class FailingTest extends TestCase {

    public function testPermissions()
    {
        // storage directory
        $this->assertTrue(false);
    }
}