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

  public function show($id)
  {
    $program = Program::getData('/' . $id);
    return view('program.detail.index', compact('program'));
  }

  public function store(Request $request)
  {
    try {
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        Http::attach(
          'image',
          file_get_contents($image),
          'image.jpg'
        )->withToken(session('token'))->post($this->getUri('programs'), [
          'name' => $request->name,
          'description' => $request->description,
        ]);
      } else {
        Http::withToken(session('token'))->post($this->getUri('programs'), [
          'name' => $request->name,
          'description' => $request->description,
        ]);
      }
      return redirect()->route('programs')->with('program-store-succeed', 'succeed to create the new program');
    } catch (\Exception $e) {
      return redirect()->route('programs')->with('program-store-failed', 'failed to create the new program');
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
