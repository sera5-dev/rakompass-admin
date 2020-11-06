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

  public function sv($request, $attr, $param)
  {
    $data = [];
    foreach ($attr as $attr) {
      if ($request->$attr !== null)
        $data[$attr] = $request->$attr;
    }

    if ($request->hasFile('image'))
      Http::attach('image', file_get_contents($request->file('image')), 'image.jpg')->withToken(session('token'))->post($this->getUri($param), $data);
    else
      Http::withToken(session('token'))->post($this->getUri($param), $data);
  }

  public function res($param, $flash, $message, $id = "")
  {
    return $id ?
      redirect()->route($param, ['id' => $id])->with($flash, $message) :
      redirect()->route($param)->with($flash, $message);
  }

  public static function getData($params)
  {
    $uri = Controller::getUri($params);
    try {
      return json_decode(Http::withToken(session('token'))->get($uri)->body())->data;
    } catch (\Exception $e) {
    }
  }
}
