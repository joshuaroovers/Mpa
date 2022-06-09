<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Genre;
use App\Models\Artist;
use App\Models\SessionPlaylist;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('songs',[
            'title' => array(array('name'=>'All Songs','theme'=>'gray')),
            'songsOrdAlph' => Song::select()->orderBy('name','asc')->get(),
            'songsOrdId' => Song::select()->orderBy('id','asc')->get(),
            'themes' => Genre::select('theme')->get(),
            'artists' => Artist::select('name')->orderBy('id','asc')->get(),
            'session' => SessionPlaylist::getPlaylist(),
        ]);
    }

    public function songsInGenre($slug)
    {
        $id = Genre::where('name',$slug)->get('id');
        
        return view('songs', [
            'title' => Genre::where('name', $slug)->get(),
            'songsOrdAlph' => Song::where('genre_id', $id[0]->id)->orderBy('name','asc')->get(),
            'songsOrdId' => Song::select()->orderBy('id','asc')->get(),
            'themes' => Genre::select('theme')->get(),
            'artists' => Artist::select('name')->orderBy('id','asc')->get(),
            'session' => SessionPlaylist::getPlaylist(),
        ]);
    }

    public function songsByArtist($slug)
    {

        return view('songs', [
            'title' => Artist::where('id', $slug)->get(),
            'songsOrdAlph' => Song::where('artist_id', $slug)->orderBy('name','asc')->get(),
            'songsOrdId' => Song::select()->orderBy('id','asc')->get(),
            'themes' => Genre::select('theme')->get(),
            'artists' => Artist::select('name')->orderBy('id','asc')->get(),
            'session' => SessionPlaylist::getPlaylist(),
        ]);
    }   
    
    public function songInfo($slug)
    {

        $genreId = Song::where('id', $slug)->get('genre_id');
        /* dd($genreId[0]); */
        $artistId = Song::where('id', $slug)->get('artist_id');
        return view('songInfo', [
            'song' => Song::where('id', $slug)->get(),
            'genre' => Genre::where('id', $genreId[0]->genre_id)->get(),
            'artist' => Artist::where('id', $artistId[0]->artist_id)->get(),
        ]);
    }  

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        //
    }
}
