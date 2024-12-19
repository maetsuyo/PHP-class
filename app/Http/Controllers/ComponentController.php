<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
  public function component() {
    return view('component');
  }


  public function postProfile(Request $request) {
    $name = $request->input('name');
    $age = $request->input('age');
    $gender = $request->input('gender');

    $user = [
      'name' => $name,
      'age' => $age,
      'gender' => $gender,
    ];

    // $request->session()->put('user', $user);
    // $value = session('user');

    $_SESSION['user'] = $user;
    $value = $_SESSION['user'];
    // dd($value);

    return view('component', ['user'=>$user, 'value'=>$value]);
  }
}