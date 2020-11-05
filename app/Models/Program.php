<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Program extends Model
{
  use HasFactory;

  public static function getData($params = "")
  {
    try {
      return json_decode(Http::withToken(session('token'))->get(Controller::getUri('programs') . $params)->body())->data;
    } catch (\Exception $e) {
    }
  }
}
