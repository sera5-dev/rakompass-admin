<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
  public function signin(Request $request)
  {
    $this->middleware([CheckToken::class]);
    $res = $this->login($request);
    $this->checkLogin($res);
  }

  public function logout()
  {
    Http::withToken($this->getToken())->get($this->getUri('logout'));
    session()->flush();
    return redirect()->route('login');
  }

  public function checkLogin($data)
  {
    if (isset($data->token)) {
      $this->setToken($data->token);
      return redirect()->route('program');
    } else {
      session()->flush();
      session()->put('failed', 'wrong username or password');
      return redirect()->route('login');
    }
  }
}
