<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidFormController extends Controller
{
  public function getMidForm() {
    return view("midform");
  }

  public function postMidForm() {
    return view("midform");
  }
}
