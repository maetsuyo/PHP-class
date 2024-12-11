<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReqResController extends Controller
{
    public function ReqRes(Request $request, Response $response) {
        return view('reqres', ['request'=>$request->all()]);
    }
}