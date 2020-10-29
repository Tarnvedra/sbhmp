<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
public function home ()
{
   return view('pages/home');
}

public function about ()
{
   return view('pages/about');
}

public function gallery ()
{
   return view('pages/gallery');
}

public function contact ()
{
   return view('pages/contact');
}

public function quote ()
{
return view('pages/quote');
}
}
