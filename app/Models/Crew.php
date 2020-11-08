<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Crew extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'name',
    'address',
    'birth_date',
    'birth_place',
  ];

  public static function getData()
  {
    try {
      return json_decode(Http::withToken(session('token'))->get(Controller::getUri('crews'))->body())->data;
    } catch (\Exception $e) {
    }
  }
}
