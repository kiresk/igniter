<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Class DatabaseTest
 * Testy suvisiace s databazou
 * @package Tests\Unit
 */
class DatabaseTest extends TestCase
{
    /**
     * Test pripojenia (spravne prihlasovacie udaje)
     */
    public function testConnection() {
        $this->assertTrue(
            // SQL ma vratit TRUE, ak vrati FALSE, test spadne a nie su spravne prihlasovacie udaje v .env subore
            DB::statement('SHOW DATABASES')
        );
    }
}
