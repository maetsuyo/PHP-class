<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FirewallMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    $ip = [
      ['ip' => '127.0.0.1']
    ];

    $detect = collect($ip)->contains('ip', $request->ip());

    if (!$detect) {
      return redirect('/reqres');
    }
    return $next($request);
  }
}
