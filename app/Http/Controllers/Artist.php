<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Artist extends Controller
{

    public function index()
    {
        $artists = \App\Models\Artist::all();
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

        $artist = new \App\Models\Artist();
        $artist->name = $request->name;
        $artist->email = $request->email;
        $artist->phone = $request->phone;
        $artist->price = $request->price;
        $artist->bio = $request->bio;
        $artist->image = $request->image;
        $artist->save();

        return redirect()->route('artists');
    }

}
