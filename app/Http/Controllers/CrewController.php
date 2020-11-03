<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;

class CrewController extends Controller
{
  public function __construct()
  {
    $this->middleware([CheckToken::class]);
  }

  public function index()
  {
    $crews = Crew::getData();
    return view('crew.index', compact('crews'));
  }
}
