<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\ArtItem  as ArtModel;

class Art extends Controller
{

    public function index()
    {
        $arts = ArtModel::all();

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


        $art = new \App\Models\ArtItem;
        $art->name = $request->name;
        $art->description = $request->description;
        $art->price = $request->price;
        $art->image = $request->image;
        $art->save();

        return redirect()->route('all-art')->with('success', 'Art added successfully.');
    }
}
