<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index(Request $request)
    {
        // ambil segment ke-2 dari URL
        if ($request->segment(2) == null) {
            abort(500);
        } else {
            return $request->segment(2);
        }
    }
}
