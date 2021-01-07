<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'content' => 'genial',
            'spotify_id' => '5Z01UMMf7V1o0MzF86s6WJ',
            'users_id' => '1',
            'music_title' => 'lose yourself',
            'music_artist' => 'eminem',
            'created_at' => '2021-01-07 17:21:37',            
        ]);
    }
}
