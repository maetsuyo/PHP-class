<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CalculatorController extends Controller
{
  public function calculator() {
    return view('calculator');
  }

  public function calculate(Request $request) {
    $value = $request->input('value');
    $calculate = $request->input('calculate');

    $total = Session::get('total', 0);
    // $total = $request->session()->get('total', 0);

    switch ($calculate) {
      case 'plus':
        $total += $value;
        break;
      case 'minus':
        $total -= $value;
        break;
      case 'multiplied':
        $total *= $value;
        break;
      case 'divided':
        $total /= $value;
        break;
      case 'reset':
        $total = 0;
        break;
    }

    Session::put('total', $total);
    // $request->session()->put('total', $total);
    $total = Session::get('total', 0);
    // $total = $request->session()->get('total', 0);
    // dd($total);
    return view('calculator', ['total'=>$total]);
  }
}