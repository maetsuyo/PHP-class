<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function test($number) {
        $message = $number;
        return view('test', ['message'=>$message]);
    }
}