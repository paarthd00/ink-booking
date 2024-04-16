<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Artist extends Controller
{

    public function index()
    {
        $artists = \App\Models\Artist::all();

        foreach ($artists as $artist) {
            $artist->image = \App\Models\Upload::find($artist->image)->path;
        }

        return view('artist.all', compact('artists'));
    }

    public function addArtist(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'bio' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);


        $upload_data = UploadController::create($request);

        $artist = new \App\Models\Artist();
        $artist->name = $request->name;
        $artist->email = $request->email;
        $artist->phone = $request->phone;
        $artist->price = $request->price;
        $artist->bio = $request->bio;
        $artist->image = $upload_data->id;
        $artist->save();

        return redirect()->route('artists');
    }
}
