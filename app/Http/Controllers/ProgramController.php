<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CheckToken;
use App\Models\Program;
use Illuminate\Support\Facades\Http;

class ProgramController extends Controller
{
  public function __construct()
  {
    $this->middleware([CheckToken::class]);
  }

  public function index()
  {
    $program = Program::getData();
    return view('program.index', compact('program'));
  }

  public function store(Request $request)
  {
    try {
      Http::withToken(session('token'))->post($this->getUri('programs'), [
        'name' => $request->name,
        'image' => $request->file('image'),
        'description' => $request->description,
      ]);
      return redirect()->route('program')->with('program-store-succeed', 'succeed to create a new program');
    } catch (\Exception $e) {
      return redirect()->route('program')->with('program-store-failed', 'failed to create a program');
    }
  }

  public function destroy(Request $request)
  {
    try {
      Http::withToken(session('token'))->delete($this->getUri('programs'), [
        'id' => $request->id,
      ]);
      return redirect()->route('program')->with('program-changes-succeed', 'succeed to delete program');
    } catch (\Exception $e) {
      return redirect()->route('program')->with('program-changes-failed', 'failed to delete a program');
    }
  }
}
