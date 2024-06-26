<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {

        return view('uploads', ['uploads' => Upload::all()]);
    }

    public function show($id)
    {
        $upload = Upload::find($id);

        return view('upload', ['upload' => $upload]);
    }


    // laravel define disks in config/filesystems.php
    // To store or retrieve file from the disk using the Storage class
    // The disk method accepts the name of the disk you'd like to work with
    // The put method stores a file on the disk
    //
    //

    public static function create(Request $request)
    {
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();

        $path = Storage::disk('public')->put('images', $file);

        $f = new Upload(['filename' => $filename, 'path' => $path]);

        $f->save();

        return $f;
    }
}
