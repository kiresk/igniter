<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Class DatabaseTest
 * Testy suvisiace s MySQL databazou
 * @package Tests\Unit
 */
class DatabaseTest extends TestCase {
    /**
     * Test pripojenia (spravne prihlasovacie udaje)
     * Ak test spadne, v subore .env nie su spravne nastavene prihlasovacie udaje
     */
    public function testConnection() {
        $this->assertTrue(
            DB::statement('SHOW DATABASES')
        );
    }
}