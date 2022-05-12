<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

function randHex() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
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
        


        DB::table('songs')->insert([
            'name' => 'Try again tomorrow',
            'artist_id' => '2',
            'duration' => '181',
            'genre_id' => '3',
        ]);
        DB::table('songs')->insert([
            'name' => 'Stay Soft',
            'artist_id' => '1',
            'duration' => '226',
            'genre_id' => '3',
        ]);
        DB::table('songs')->insert([
            'name' => 'Heat Lightning',
            'artist_id' => '1',
            'duration' => '173',
            'genre_id' => '3',
        ]);
        DB::table('songs')->insert([
            'name' => 'mona lisa',
            'artist_id' => '3',
            'duration' => '191',
            'genre_id' => '3',
        ]);
        DB::table('songs')->insert([
            'name' => 'Ready Now',
            'artist_id' => '4',
            'duration' => '181',
            'genre_id' => '3',
        ]);
        DB::table('songs')->insert([
            'name' => 'You',
            'artist_id' => '4',
            'duration' => '193',
            'genre_id' => '3',
        ]);
        DB::table('songs')->insert([
            'name' => 'Four Tequilas Down',
            'artist_id' => '4',
            'duration' => '143',
            'genre_id' => '3',
        ]);
        DB::table('songs')->insert([
            'name' => 'creature',
            'artist_id' => '5',
            'duration' => '337',
            'genre_id' => '3',
        ]);
        DB::table('songs')->insert([
            'name' => 'still feel.',
            'artist_id' => '5',
            'duration' => '255',
            'genre_id' => '3',
        ]);
        DB::table('songs')->insert([
            'name' => 'Move Me',
            'artist_id' => '5',
            'duration' => '233',
            'genre_id' => '3',
        ]);

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
    }
}
