<?php

namespace App\Http\Controllers;

use App\Models\SessionPlaylist;
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
    public function saveSessiontoPlaylist(){
        
    }
}
