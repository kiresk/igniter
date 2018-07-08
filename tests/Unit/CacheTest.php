<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

/**
 * Class CacheTest
 * Test funkcnosti cache
 * @package Tests\Unit
 */
class CacheTest extends TestCase {

    public function testCacheRunning() {
        $testData = 'Příliš žluťoučký kůň úpěl ďábelské ódy';
        Cache::add('PHPUnit_Testing', $testData, 1);
        $cached = Cache::get('PHPUnit_Testing');
        $this->assertEquals($cached, $testData);
        Cache::forget('PHPUnit_Testing');
    }
}