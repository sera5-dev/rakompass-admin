<?php

namespace App\Http\Controllers;

use Closure;

class CheckToken extends Controller
{
  public function handle($request, Closure $next)
  {
    if (!session('token')) {
      return redirect('login');
    }

    return $next($request);
  }
}
