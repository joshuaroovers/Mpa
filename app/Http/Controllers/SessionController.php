<?php

namespace App\Http\Controllers;

use App\Models\SessionPlaylist;
use App\Models\Playlist;
use App\Models\SongInPlaylist;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function addSongtoSession($slug){   
        $session = new SessionPlaylist();
        $session->addSong($slug);
        return redirect()->back();
    }
    public function removeSongFromSession($index){
        $session = new SessionPlaylist();
        $session->removeSong($index);
        return redirect()->back();
    }
    public function saveSessionToPlaylist(){
        DB::insert('insert into playlist (name) values (?)', ['New Playlist']);
        /* $test = Playlist::select()->orderBy('id','desc')->get(); */
        $session = new SessionPlaylist();
        foreach($session->getPlaylist() as $songId){        /* this works just need to get the idea of the just created playlist */

            DB::insert('insert into SongsInPlaylist (playlist_id, song_id) values (?, ?)', [1, $songId]);
        }
        return redirect()->back();
    }
}
