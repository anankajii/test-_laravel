<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // CREATE SESSION
    public function create(Request $request)
    {
        $request->session()->put('nama', 'Politeknik Negeri Jember');

        return "Data berhasil ditambahkan ke session";
    }

    // SHOW SESSION
    public function show(Request $request)
    {
        if ($request->session()->has('nama')) {
            return $request->session()->get('nama');
        } else {
            return "Tidak ada data dalam session";
        }
    }

    // DELETE SESSION
    public function delete(Request $request)
    {
        $request->session()->forget('nama');

        return "Data telah dihapus dari session";
    }
}
