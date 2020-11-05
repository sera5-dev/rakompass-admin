<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

  public function store(Request $request)
  {
    try {
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        Http::attach(
          'image',
          file_get_contents($image),
          'image.jpg'
        )->withToken(session('token'))->post($this->getUri('crews'), [
          'name' => $request->name,
          'address' => $request->address,
          'birth_date' => $request->birth_date,
          'birth_place' => $request->birth_place,
        ]);
      } else {
        Http::withToken(session('token'))->post($this->getUri('crews'), [
          'name' => $request->name,
          'address' => $request->address,
          'birth_date' => $request->birth_date,
          'birth_place' => $request->birth_place,
        ]);
      }
      return redirect()->route('crews')->with('crew-store-succeed', 'succeed to create the new crew');
    } catch (\Exception $e) {
      return redirect()->route('crews')->with('crew-store-failed', 'failed to create the crew');
    }
  }
}
