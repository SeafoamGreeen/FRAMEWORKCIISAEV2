<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarController extends Controller
{
  public function index()
  {
    return view('registrar');
  }
}
