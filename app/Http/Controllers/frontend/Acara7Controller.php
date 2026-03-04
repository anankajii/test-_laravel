<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request,App\Http\Controllers\Controller;

class Acara7Controller extends Controller
{
    public function index()
    {
       return view('frontend.home');
    }
}
