<?php

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class OtherTest
 * Ostatne univerzalne testy
 * @package Tests\Unit
 */
class OtherTest extends TestCase {

    /**
     * Test pristupovych prav
     * Ak test spadne, nie su pristupne (zapis) alebo neexistuju adresare, ktore aplikacia potrebuje ku spravnemu fungovaniu
     */
    public function testPermissions()
    {
        // storage directory
        $this->assertDirectoryIsWritable('../../storage/', 'Directory /storage is not writable or does not exists');
        // bootstrap/cache directory
        $this->assertDirectoryIsWritable('../../bootstrap/cache/', 'Directory /bootstrap/cache is not writable or does not exists');
    }
}