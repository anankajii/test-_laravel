<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request, App\Http\Controllers\Controller;
use App\Models\PengalamanKerja;

class PengalamanKerjaController extends Controller
{

    public function index()
    {
        $pengalaman_kerja = PengalamanKerja::all();
        return view('backend.pengalaman_kerja.index', compact('pengalaman_kerja'));
    }

    public function create()
    {
        return view('backend.pengalaman_kerja.create');
    }

    public function store(Request $request)
    {
        PengalamanKerja::create([
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
            'sistem' => $request->sistem
        ]);

        return redirect('/pengalaman_kerja');
    }

    public function edit($id)
    {
        $pengalaman_kerja = PengalamanKerja::find($id);
        return view('backend.pengalaman_kerja.edit', compact('pengalaman_kerja'));
    }

    public function update(Request $request, $id)
    {
        $pengalaman_kerja = PengalamanKerja::find($id);

        $pengalaman_kerja->update([
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
            'sistem' => $request->sistem
        ]);

        return redirect('/pengalaman_kerja');
    }

    public function delete($id)
    {
        $pengalaman_kerja = PengalamanKerja::find($id);
        $pengalaman_kerja->delete();

        return redirect('/pengalaman_kerja');
    }

    public function destroy($id)
    {
        PengalamanKerja::findOrFail($id)->delete();

        return redirect()->route('pengalaman_kerja.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
