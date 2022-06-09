<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class SessionPlaylist extends Model
{
    use HasFactory;

    public static $tempPlaylist = array();

    function __construct()
    {

        if (! Session::exists('playlist')) {
            // if there is no current 'playlist' item in the session, create one
            Session::put('playlist', SessionPlaylist::$tempPlaylist);
            Session::save();
            
        } else {
            // retrieve existing session
            
            SessionPlaylist::$tempPlaylist = Session::get('playlist');
        }
        
    }
    

    function addSong($id){

        array_push(SessionPlaylist::$tempPlaylist, $id);
        Session::put('playlist',SessionPlaylist::$tempPlaylist);
        Session::save(); 
    }
    function removeSong($index){
        array_splice(SessionPlaylist::$tempPlaylist,$index,1);
        Session::put('playlist',SessionPlaylist::$tempPlaylist);
        Session::save(); 
    }

    static function getPlaylist(){
        return Session::get('playlist');
    }
    
}
