<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SampleMid
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    $word = 'SampleMid';
    if ($word == 'SampleMid' && $request->path() !== 'abehiroshi') {
      return redirect('/abehiroshi');
    }
    return $next($request);
  }
}
