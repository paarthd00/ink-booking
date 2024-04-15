<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;

use \App\Models\ArtItem  as ArtModel;

class Art extends Controller
{

    public function index()
    {
        $arts = ArtModel::all();

        foreach ($arts as $art) {
            $art->image = \App\Models\Upload::find($art->image)->path;
        }

        return view('art.all', ['arts' => $arts]);
    }

    public function addArt(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $upload_data = UploadController::create($request);

        $art = new \App\Models\ArtItem;
        $art->name = $request->name;
        $art->description = $request->description;
        $art->price = $request->price;
        $art->image = $upload_data->id;

        $art->save();

        return redirect()->route('all-art')->with('success', 'Art added successfully.');
    }
}
