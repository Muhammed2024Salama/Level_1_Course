<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @return void
     */
    public function mohamed()
    {
       return view('index');
    }

    public function printName($name = 'DefaultName')
    {
        dd("Hello $name from printName function");
    }
}
