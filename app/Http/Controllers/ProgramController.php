<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CheckToken;
use App\Models\Program as Obj;
use Illuminate\Support\Facades\Http;

class ProgramController extends Controller
{
  public function __construct()
  {
    $this->middleware([CheckToken::class]);
    $obj = new Obj();
    $this->attr = $obj->getFillable();
  }

  public function index()
  {
    $program = $this->getData('programs');
    return view('program.index', compact('program'));
  }

  public function show($id)
  {
    $program = $this->getData('programs/' . $id);
    $crews = $this->getData('programs/' . $id . '/crews');
    return view('program.detail.index', compact('program', 'crews'));
  }

  public function store(Request $request)
  {
    try {
      $this->sv($request, $this->attr, 'programs');
      return $this->res('programs', 'program-store-succeed', 'succeed to store data');
    } catch (\Exception $e) {
      return $this->res('programs', 'program-store-failed', 'failed to store data');
    }
  }

  public function storeCrew(Request $request, $id)
  {
    try {
      $data = ['crew_id'];
      $this->sv($request, $data, 'programs/' . $id . '/crews');
      return $this->res('programs', 'program-crew-store-succeed', 'succeed to store data', $id);
    } catch (\Exception $e) {
      return $this->res('programs', 'program-crew-store-succeed', 'failed to store data', $id);
    }
  }

  public function destroy(Request $request)
  {
    try {
      Http::withToken(session('token'))->delete($this->getUri('programs'), [
        'id' => $request->id,
      ]);
      return redirect()->route('programs')->with('program-changes-succeed', 'succeed to delete the program');
    } catch (\Exception $e) {
      return redirect()->route('programs')->with('program-changes-failed', 'failed to delete the program');
    }
  }
}
