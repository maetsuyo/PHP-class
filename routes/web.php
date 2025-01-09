<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ReqResController;
use App\Http\Controllers\AbeHiroController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\MidFormController;
use App\Http\Middleware\ComponentMiddleware;
use App\Http\Middleware\SampleMid;
use App\Http\Middleware\MidFormMiddleware;
use App\Http\Middleware\FirewallMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info/{msg?}', function ($msg = 'test') {
    return view('info', ['msg'=>$msg]);
});

Route::get('/test/{number}', [TestController::class, 'test']);

Route::get('/reqres', [ReqResController::class, 'reqres'])->middleware(FirewallMiddleware::class);

Route::get('/abehiroshi', function () {
    return view('abehiroshi');
});

Route::post('/abehiroshi', [AbeHiroController::class, 'abehiro']);

Route::get('/directive', function () {
    return view('directive');
});

Route::get('/component', function () {
    return view('component');
})->middleware(ComponentMiddleware::class);

Route::post('/component', [ComponentController::class, 'postProfile']);

Route::get('/calculator', function () {
    return view('calculator');
});

Route::post('/calculator', [CalculatorController::class, 'calculate']);

Route::get('/middle', function () {
    return view('middle');
})->middleware(SampleMid::class);

Route::get('/midform', [MidFormController::class, 'getMidForm']);

Route::post('/midform', [MidFormController::class, 'postMidForm'])->middleware(MidFormMiddleware::class);