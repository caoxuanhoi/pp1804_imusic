<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Album;
use App\Models\Artist;

class pageController extends Controller
{
    public function getIndex()
    {  
        $songs = Music::with('artists')->orderBy('updated_at', 'DESC')->paginate(config('custom.paginate_8'));
        $charts = Music::with('artists')->orderBy('view_count', 'DESC')->paginate(config('custom.paginate_8'));
        $albums = Album::all();
        $artists = Artist::with('musics')->orderBy('updated_at', 'DESC')->paginate(config('custom.paginate_8'));
        $serial = 0;

        return view('admin.page.index', compact('songs', 'albums', 'artists', 'charts', 'serial'));
    }

    public function getBrowse()
    {
        $songs = Music::all();
        $albums = Album::all();
        
        return view('admin.page.browse', compact('songs', 'albums'));
    }

    public function getRadio()
    {
        $songs = Music::with('artists')->orderBy('updated_at', 'DESC')->paginate(config('custom.paginate_8'));
        $albums = Album::all();
        $artists = Artist::all();

        return view('admin.page.radio', compact('songs', 'albums', 'artists'));
    }

    public function getSingle($id)
    {
        $musics = Music::with('artists')->orderBy('updated_at', 'DESC')->paginate(config('custom.paginate_8'));
        $artists = Artist::with('musics')->orderBy('updated_at', 'DESC')->paginate(config('custom.paginate_4'));
        $albums = Album::all();
        $serial = 0;

        return view('admin.page.single', compact('artists', 'albums', 'musics', 'serial'));
    }
}

