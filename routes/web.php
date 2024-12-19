<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ReqResController;
use App\Http\Controllers\AbeHiroController;
use App\Http\Controllers\ComponentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info/{msg?}', function ($msg = 'test') {
    return view('info', ['msg'=>$msg]);
});

Route::get('/test/{number}', [TestController::class, 'test']);

Route::get('/reqres', [ReqResController::class, 'reqres']);

Route::get('/abehiroshi', function () {
    return view('abehiroshi');
});

Route::post('/abehiroshi', [AbeHiroController::class, 'abehiro']);

Route::get('/directive', function () {
    return view('directive');
});

Route::get('/component', function () {
    return view('component');
});

Route::post('/component', [ComponentController::class, 'postProfile']);