<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
  public function calculator() {
    return view('calculator');
  }

  public function calculate(Request $request) {
    $value = $request->input('value');
    $calculate = $request->input('calculate');

    $total = $request->session()->get('total', 0);

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

    $request->session()->put('total', $total);
    $total = $request->session()->get('total', 0);
    // dd($total);
    return view('calculator', ['total'=>$total]);
  }
}