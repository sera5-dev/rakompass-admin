<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public static function getUri($param)
  {
    return 'http://127.0.0.1:8000/' . $param;
  }

  public function login($data)
  {
    $res = json_decode(Http::post($this->getUri('login'), ['username' => $data->username, 'password' => $data->password,])->body());
    isset($res->token) ? $this->setToken($res->token) : $this->setFailed('wrong username or password');
  }

  public static function setFailed($message)
  {
    return session()->put('failed', $message);
  }

  public static function setToken($token)
  {
    return session()->put('token', $token);
  }

  public static function getToken()
  {
    return session('token');
  }

  public static function checkToken()
  {
    return session('token') ? true : false;
  }
}
