<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
public function proses(Request $request)
{
    $request->validate([
        'nama' => 'required|min:5|alpha',
        'alamat' => 'required|min:5|alpha'
    ]);

    return "Nama: ".$request->nama." | Alamat: ".$request->alamat;
}
}