<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'name' => 'Alt-pop',
            'theme' => 'lightseagreen',
        ]);
        DB::table('genres')->insert([
            'name' => 'Jazz',
            'theme' => 'rebeccapurple',
        ]);
        DB::table('genres')->insert([
            'name' => 'Country',
            'theme' => 'darkorange',
        ]);
    }
}
