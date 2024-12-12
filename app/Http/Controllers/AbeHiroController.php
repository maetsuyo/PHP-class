<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbeHiroController extends Controller
{
  public function abehiro(Request $request) {
    $name = $request->input('name');
    if ($name) {
      return view('abehiroshi', ['name'=>$name]);
    } else {
      return view('abehiroshi');
    }
  }
}
