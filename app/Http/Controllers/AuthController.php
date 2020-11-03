<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function index()
  {
    return $this->checkToken() ?  redirect()->route('program') : view('auth');
  }

  public function verify(Request $request)
  {
    $this->login($request);
    return redirect()->route('login');
  }
}
