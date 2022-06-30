<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

function randHex() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}
function randGenre(){
    return rand(1,5);
}
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        #region GENRES
        DB::table('genres')->insert([
            'name' => 'Pop',
            'theme' => 'hotpink',
        ]);
        DB::table('genres')->insert([
            'name' => 'Rock',
            'theme' => 'crimson',
        ]);
        DB::table('genres')->insert([
            'name' => 'Indie',
            'theme' => 'lightseagreen',
        ]);
        DB::table('genres')->insert([
            'name' => 'Jazz',
            'theme' => 'rebeccapurple',
        ]);
        DB::table('genres')->insert([
            'name' => 'Country',
            'theme' => 'coral',
        ]);
        #endregion

        #region SONGS
        DB::table('songs')->insert([
            'name' => 'Try again tomorrow',
            'artist_id' => '2',
            'duration' => '181',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Stay Soft',
            'artist_id' => '1',
            'duration' => '226',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Heat Lightning',
            'artist_id' => '1',
            'duration' => '173',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'mona lisa',
            'artist_id' => '3',
            'duration' => '191',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Ready Now',
            'artist_id' => '4',
            'duration' => '181',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'You',
            'artist_id' => '4',
            'duration' => '193',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Four Tequilas Down',
            'artist_id' => '4',
            'duration' => '143',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'creature',
            'artist_id' => '5',
            'duration' => '337',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'still feel.',
            'artist_id' => '5',
            'duration' => '255',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Move Me',
            'artist_id' => '5',
            'duration' => '233',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'arrow',
            'artist_id' => '5',
            'duration' => '239',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Hayloft II (SMASHUP)',
            'artist_id' => '6',
            'duration' => '223',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Crush',
            'artist_id' => '7',
            'duration' => '257',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Wishful Drinking',
            'artist_id' => '7',
            'duration' => '204',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Bored',
            'artist_id' => '7',
            'duration' => '229',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'I Like (the idea of) You',
            'artist_id' => '7',
            'duration' => '233',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Bad Ideas',
            'artist_id' => '7',
            'duration' => '239',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Arms Tonite',
            'artist_id' => '6',
            'duration' => '216',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Not Over You',
            'artist_id' => '7',
            'duration' => '203',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Would You Be So Kind',
            'artist_id' => '4',
            'duration' => '181',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Billie Bossa Nova',
            'artist_id' => '8',
            'duration' => '196',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'coming of age',
            'artist_id' => '3',
            'duration' => '159',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Two Slow Dancers',
            'artist_id' => '1',
            'duration' => '240',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'fever dream',
            'artist_id' => '3',
            'duration' => '197',
            'genre_id' => randGenre(),
        ]);
        DB::table('songs')->insert([
            'name' => 'Problems',
            'artist_id' => '6',
            'duration' => '207',
            'genre_id' => randGenre(),
        ]);
        #endregion

        #region ARTISTS
        DB::table('artists')->insert([
            'name' => 'Mitski',
            'theme' => randHex(),
        ]);
        DB::table('artists')->insert([
            'name' => 'liana flores',
            'theme' => randHex(),
        ]);
        DB::table('artists')->insert([
            'name' => 'mxmtoon',
            'theme' => randHex(),
        ]);
        DB::table('artists')->insert([
            'name' => 'dodie',
            'theme' => randHex(),
        ]);
        DB::table('artists')->insert([
            'name' => 'half·alive',
            'theme' => randHex(),
        ]);
        DB::table('artists')->insert([
            'name' => 'Mother Mother',
            'theme' => randHex(),
        ]);
        DB::table('artists')->insert([
            'name' => 'Tessa Violet',
            'theme' => randHex(),
        ]);
        DB::table('artists')->insert([
            'name' => 'Billie Eilish',
            'theme' => randHex(),
        ]);
        #endregion
    }
}
