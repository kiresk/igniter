<?php

namespace App\Http\Controllers;

use App\Product;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        Product::test();
        return view('front.index');
    }
}
