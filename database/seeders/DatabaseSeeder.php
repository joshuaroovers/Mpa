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
        ]);
        DB::table('genres')->insert([
            'name' => 'Rock',
        ]);
        DB::table('genres')->insert([
            'name' => 'Alt-pop',
        ]);
        DB::table('genres')->insert([
            'name' => 'Jazz',
        ]);
    }
}
