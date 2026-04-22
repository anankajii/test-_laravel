<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UploadController extends Controller
{
    // =====================
    // VIEW
    // =====================

    public function upload()
    {
        return view('upload');
    }

    public function dropzone()
    {
        return view('dropzone');
    }

    public function pdf_upload()
    {
        return view('pdf_upload');
    }

    // =====================
    // UPLOAD BIASA
    // =====================

    public function proses(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);

        $file = $request->file('file');
        $nama_file = time().'_'.$file->getClientOriginalName();

        $path = public_path('data_file');

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $file->move($path, $nama_file);

        return back()->with('success', 'File berhasil di upload');
    }

    // =====================
    // RESIZE IMAGE
    // =====================

    public function resize_upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image',
        ]);

        $file = $request->file('file');

        $manager = new ImageManager(new Driver());
        $image = $manager->read($file->getRealPath());
        $image->resize(200, 200);

        $path = public_path('img/logo');

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $image->save($path . '/' . time() . '.jpg');

        return "Upload & Resize berhasil";
    }

    // =====================
    // DROPZONE IMAGE
    // =====================

    public function dropzone_store(Request $request)
    {
        $image = $request->file('file');

        $path = public_path('img/dropzone');

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $imageName = time().'_'.$image->getClientOriginalName();

        $image->move($path, $imageName);

        return response()->json($imageName);
    }

    // =====================
    // DROPZONE PDF
    // =====================

    public function pdf_store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048'
        ]);

        $pdf = $request->file('file');

        $path = public_path('pdf/dropzone');

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $pdfName = time().'_'.$pdf->getClientOriginalName();

        $pdf->move($path, $pdfName);

        return response()->json([
            'success' => true,
            'file' => $pdfName
        ]);
    }
}