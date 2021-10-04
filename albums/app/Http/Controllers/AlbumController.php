<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    //
    public function store(Artist $artist){
        //request all data entered
        $album = new Album();
        $album->name = \request()->get('name');
        $artist->albums()->save($album);

        return redirect()->to("/artists/$artist->id")->with('message', 'The album was created sucessfully');
    }

    public function destroy(Artist $artist, Album $album)
    {
        $album->delete();
        return redirect()->to("/artists/$artist->id")->with('message', 'The album was deleted sucessfully');
    }
}
