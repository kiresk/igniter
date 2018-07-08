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
    const CACHE_KEY = 'PHPUnit_Testing';

    /**
     * Zakladny test ulozenia dat do Cache
     */
    public function testCacheRunning() {
        $testData = 'Příliš žluťoučký kůň úpěl ďábelské ódy';
        Cache::add(self::CACHE_KEY, $testData, 1);
        $cached = Cache::get(self::CACHE_KEY);
        $this->assertEquals($cached, $testData);
        Cache::forget(self::CACHE_KEY);
    }

    /**
     * Test zabudnutia dat ulozenych v zakladnom teste
     * @depends testCacheRunning
     */
    public function testForget() {
        $cached = Cache::get(self::CACHE_KEY);
        $this->assertEmpty($cached);
        // test vratenia defaultnej hodnoty string("OK")
        $cached = Cache::get(self::CACHE_KEY, 'OK');
        $this->assertEquals('OK', $cached);
        // pre istotu
        Cache::forget(self::CACHE_KEY);
    }

    /**
     * Test ulozenia a nacitania objektu z/do Cache
     */
    public function testStoreObject() {
        // prepare data
        $obj = new \stdClass();
        $obj->string = 'string';
        $obj->integer = 123;
        $obj->float = 56.13;
        $obj->array = ['a', 12, 'c'];
        $obj->obj = new \stdClass();

        // store data in cache
        Cache::add(self::CACHE_KEY, $obj, 1);

        // get data from cache
        $cached = Cache::get(self::CACHE_KEY);

        // tests
        $this->assertTrue($cached instanceof \stdClass);
        $this->assertTrue(is_string($cached->string));
        $this->assertTrue(is_int($cached->integer));
        $this->assertTrue(is_float($cached->float));
        $this->assertTrue(is_array($cached->array));
        $this->assertNotEmpty($cached->array);
        $this->assertTrue(is_object($cached->obj) && $cached instanceof \stdClass);

        // forget data in cache
        Cache::forget(self::CACHE_KEY);
    }
}