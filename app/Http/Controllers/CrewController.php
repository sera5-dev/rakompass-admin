<?php

namespace App\Http\Controllers;

use App\Models\Crew as Obj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CrewController extends Controller
{
  public function __construct()
  {
    $this->middleware([CheckToken::class]);
    $obj = new Obj();
    $this->attr = $obj->getFillable();
  }

  public function index()
  {
    $crews = Obj::getData();
    return view('crew.index', compact('crews'));
  }

  public function store(Request $request)
  {
    try {
      $request->filled('id') ? $route = 'crews-show' : $route = 'crews';
      $this->sv($request, $this->attr, 'crews');
      return $this->res($route, 'crew-store-succeed', 'succeed to store data', $request->id);
    } catch (\Exception $e) {
      return $this->res($route, 'crew-store-failed', 'failed to store data');
    }
  }

  public function show($id)
  {
    $crew = $this->getData('crews/' . $id);
    return view('crew.detail', compact('crew'));
  }

  public function destroy(Request $request)
  {
    try {
      Http::withToken(session('token'))->delete($this->getUri('crews'), ['id' => $request->id,]);
      return redirect()->route('crews')->with('crew-changes-succeed', 'succeed to delete the crew');
    } catch (\Exception $e) {
      return redirect()->route('crews')->with('crew-changes-failed', 'failed to delete the crew');
    }
  }
}
