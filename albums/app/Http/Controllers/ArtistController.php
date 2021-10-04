<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    //
    public function index()
    {
        $artists = Artist::all();
        return view('index', ['artists'=>$artists]);
    }

    public function show(Artist $artist)
    {
        $artist->load('albums');

//        dd($artist);
//        $artist = Artist::findOrFail($id);
        return view('show', ['artist'=>$artist]);
    }


}
