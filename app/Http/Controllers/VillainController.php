<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Villain;

class VillainController extends Controller
{
  public function index ()
  {
    $villains = Villain::all();
    return view('characters.villains', compact('villains'));
  }
}
