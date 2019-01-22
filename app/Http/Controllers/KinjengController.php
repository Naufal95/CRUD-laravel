<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KinjengController extends Controller
{
function index() {
  echo "dari controller";
}
function danur() {
  return "bebek goreng";
}
function winda() {
  return view('mamalia/kucing');
}
}
