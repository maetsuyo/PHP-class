<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbeHiroController extends Controller
{
  public function abehiro(Request $request) {
    $path = $request->input('path');
    if ($path == 'welcome') {
      return view('welcome');
    } elseif ($path == 'directive') {
      return view('directive');
    } else {
      return view('abehiroshi', ['path'=>$path]);
    }
  }
}