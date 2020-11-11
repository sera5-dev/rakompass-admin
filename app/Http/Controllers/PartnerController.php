<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner as Obj;

class PartnerController extends Controller
{
  public function __construct()
  {
    $this->middleware([CheckToken::class]);
    $obj = new Obj();
    $this->attr = $obj->getFillable();
  }

  public function index()
  {
    $partners = $this->getData('partners');
    return view('partner.index', compact('partners',));
  }

  public function store(Request $request)
  {
    try {
      $this->sv($request, $this->attr, 'partners');
      return $this->res('partners', 'partner-store-succeed', 'succeed to store data');
    } catch (\Exception $e) {
      return $this->res('partners', 'partner-store-failed', 'failed to store data');
    }
  }
}
