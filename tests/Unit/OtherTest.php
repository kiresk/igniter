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
        $this->assertDirectoryIsWritable(storage_path());
    }
}