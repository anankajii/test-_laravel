<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('backend.pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        return view('backend.pendidikan.create');
    }

    public function store(Request $request)
    {
        Pendidikan::create($request->all());

        return redirect()->route('pendidikan.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return view('backend.pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->update($request->all());

        return redirect()->route('pendidikan.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->delete();

        return redirect()->route('pendidikan.index')
            ->with('success', 'Data berhasil dihapus');
    }
}

