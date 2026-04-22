<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendidikan;

class ApiPendidikanController extends Controller
{
    // GET ALL
    public function index()
    {
        return response()->json(Pendidikan::all(), 200);
    }

    // GET BY ID
    public function show($id)
    {
        return response()->json(Pendidikan::find($id), 200);
    }

    // INSERT
    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'tingkatan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
        ]);

        $data = Pendidikan::create($request->all());

        return response()->json([
            'status' => 1,
            'message' => 'Pendidikan berhasil ditambahkan!',
            'data' => $data
        ], 200);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'tingkatan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
        ]);

        $data = Pendidikan::find($id);
        $data->update($request->all());

        return response()->json([
            'status' => 1,
            'message' => 'Pendidikan berhasil diupdate!'
        ], 200);
    }

    // DELETE
    public function destroy($id)
    {
        Pendidikan::destroy($id);

        return response()->json([
            'status' => 1,
            'message' => 'Pendidikan berhasil dihapus!'
        ], 200);
    }
}