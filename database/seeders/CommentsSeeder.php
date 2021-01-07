<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'content' => 'wowwwww',
            'posts_id' => '1',
            'users_id' => '1',
            'created_at' => '2021-01-07 17:21:37',            
        ]);
    }
}
