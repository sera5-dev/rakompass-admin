<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About as Obj;

class AboutController extends Controller
{
  public function __construct()
  {
    $this->middleware([CheckToken::class]);
    $obj = new Obj();
    $this->attr = $obj->getFillable();
  }

  public function index()
  {
    $abouts = $this->getData('abouts');
    return view('about.index', compact('abouts'));
  }

  public function store(Request $request)
  {
    try {
      $this->sv($request, $this->attr, 'abouts');
      return $this->res('abouts', 'about-store-succeed', 'succeed to store data');
    } catch (\Exception $e) {
      return $this->res('abouts', 'about-store-failed', 'failed to store data');
    }
  }
}
