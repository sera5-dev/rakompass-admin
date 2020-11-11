<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event as Obj;

class EventController extends Controller
{
  public function __construct()
  {
    $this->middleware([CheckToken::class]);
    $obj = new Obj();
    $this->attr = $obj->getFillable();
  }

  public function index()
  {
    $events = $this->getData('events');
    return view('event.index', compact('events',));
  }

  public function store(Request $request)
  {
    try {
      $this->sv($request, $this->attr, 'events');
      return $this->res('events', 'event-store-succeed', 'succeed to store data');
    } catch (\Exception $e) {
      return $this->res('events', 'event-store-failed', 'failed to store data');
    }
  }
}
