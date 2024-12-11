<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info/{msg?}', function ($msg = 'test') {
    return view('info', ['msg'=>$msg]);
});

Route::get('/test/{number}', [Test::class, 'test']);