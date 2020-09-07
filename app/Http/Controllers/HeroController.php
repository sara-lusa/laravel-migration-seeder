<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
  public function index ()
  {
    $heroes = Hero::all();
    // dd(compact('heroes'));
    return view('characters.heroes', compact('heroes'));
  }
}
