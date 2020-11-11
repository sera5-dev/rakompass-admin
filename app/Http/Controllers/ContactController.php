<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact as Obj;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
  public function __construct()
  {
    $this->middleware([CheckToken::class]);
    $obj = new Obj();
    $this->attr = $obj->getFillable();
  }

  public function index()
  {
    $contacts = $this->getData('contacts');
    $socials = $this->getData('socials');
    return view('contact.index', compact('contacts', 'socials'));
  }

  public function store(Request $request)
  {
    try {
      $this->sv($request, $this->attr, 'programs');
      return $this->res('contacts', 'program-store-succeed', 'succeed to store data');
    } catch (\Exception $e) {
      return $this->res('contacts', 'program-store-failed', 'failed to store data');
    }
  }

  public function destroy(Request $request)
  {
    try {
      Http::withToken(session('token'))->delete($this->getUri('contacts'), ['id' => $request->id,]);
      return redirect()->route('contacts')->with('contact-changes-succeed', 'succeed to delete the program');
    } catch (\Exception $e) {
      return redirect()->route('contacts')->with('contact-changes-failed', 'failed to delete the program');
    }
  }
}
