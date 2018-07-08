<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Product extends Model
{
    //
    public static function test() {
        $data = Cache::get('data');

        if (!$data) {
            $data = 'asdf';
            Cache::add('data', $data, 1);
            var_dump('Stored in cache...');
        }

        var_dump($data);

    }
}
